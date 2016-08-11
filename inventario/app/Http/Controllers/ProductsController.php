<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Tag;
use App\Product;
use App\Image;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirects;
use Laracasts\Flash\Flash;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::Search($request->nombre)->orderBy('id', 'DESC')->paginate(5);
        $products->each(function($products){
          $products->category;
          $products->user;

    });
        return view('admin.products.index')->
                with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');

        return view('admin.products.create')
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //manipulacion de imagenes
        if($request->file('image'))
        {
          $file = $request->file('image');
          $name = 'productor_' . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/products/';
          $file->move($path, $name);
        }

        $product = new Product($request->all());
        $product->user_id = \Auth::user()->id;
        $product->save();

        $product->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->product()->associate($product);
        $image->save();

        Flash::success('Se ha creado el producto correctamente');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product->category;
        $categories = Category::orderBy('name', 'DESC')->lists('name', 'id');
        $tags = Tag::orderBy('name', 'DESC')->lists('name', 'id');

        $my_tags = $product->tags->lists('id')->ToArray();

        return view('admin.products.edit')->
                with('categories',$categories)->
                with('product', $product)->
                with('tags', $tags)->
                with('my_tags',$my_tags);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();

        $product->tags()->sync($request->tags);
        Flash::warning('Se ha editado el producto correctamente');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        Flash::error('Se ha eliminado el producto exitosamente');
        return redirect()->route('admin.products.index');
    }
}
