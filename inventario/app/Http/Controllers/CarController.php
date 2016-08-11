<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use App\Http\Requests;
use App\Car;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Redirects;
use Laracasts\Flash\Flash;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\Auth::user() === null){
          Flash::error('Debes loguearte o registrarte para poder comprar productos');
          return redirect('products/'.$request->id);
        }else{
          $product = DB::table('products')->where('id', $request->id)->get();
          foreach($product as $pro){
          if($request->cantidad <= $pro->cantidad){
          $car = new Car();
          $car->nombre_producto = $pro->nombre;
          $total = $pro->precio * $request->cantidad;
          $car->precio_producto = $total;
          $car->cantidad_solicitada = $request->cantidad;
          $car->user_id = \Auth::user()->id;

          $car->save();

          $prod_cant_nueva = $pro->cantidad - $request->cantidad;
          DB::table('products')->where('id', $request->id)->update(['cantidad' => $prod_cant_nueva]);
          Flash::success($pro->nombre.' se ha agregado al carrito de compras');
          return redirect('/');
        }else{
          Flash::error('No se encuentran suficientes productos en stock para la cantidad solicitada');
          return redirect('products/'.$request->id);
        }
      }
        }
    }


      public function viewCar()
      {
        $user = \Auth::user()->id;
        $cars = DB::table('cars')->where('user_id', $user)->get();
        $total = 0;
        foreach($cars as $car)
        {
          $total += $car->precio_producto;
        }
        return view('front.car')->with('cars', $cars)->with('total', $total)
                                ->with('user', $user);
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteItem($id)
    {
        $item = DB::table('cars')->where('id', $id)->get();
        foreach($item as $it){
          $products = DB::table('products')->where('nombre', $it->nombre_producto)->get();
          foreach($products as $product){
            $regresada = $product->cantidad + $it->cantidad_solicitada;
            DB::table('products')->where('id', $product->id)->update(['cantidad' => $regresada]);
      }
        }
        DB::table('cars')->where('id', $id)->delete();
        Flash::warning('Se ha eliminado el producto de tu carrito de compras');
        return redirect('/');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrito = DB::table('cars')->where('user_id', $id)->delete();

        Flash::success('Se ha enviado tu pedido, para mas informacion puedes contactarnos al correo elproductor@gmail.com');
        return redirect('/');
    }

}
