<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class FrontController extends Controller
{
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
}
