<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
      $products = Product::orderBy('id', 'DESC')->paginate(4);
      $products->each(function($products){
        $products->category;
        $products->images;
    });
      return view('front.index')
      ->with('products', $products);
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $products = $category->products()->paginate(4);
        $products->each(function($products){
          $products->category;
          $products->images;
        });
          return view('front.index')
          ->with('products', $products);
    }

    public function tagCategory($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $products = $category->products()->paginate(4);
        $products->each(function($products){
          $products->category;
          $products->images;
        });
          return view('front.index')
          ->with('products', $products);
    }

    public function viewProduct($id)
    {
      $product = Product::find($id);
      $product->category;
      $product->user;
      $product->tags;
      $product->images;

      return view('front.product')->with('product', $product);
    }

}
