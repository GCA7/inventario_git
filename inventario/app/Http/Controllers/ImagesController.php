<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class ImagesController extends Controller
{
    /**
    * Display a listing of the resource
    *
    * @return \Iluminate\Http\Response
    */
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')->paginate(5);
        $images->each(function ($images){
            $images->product;
    });
        return view('admin.images.index')
              ->with('images', $images);
    }
}
