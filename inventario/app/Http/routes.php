<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rutas del frontend
Route::get('/', [
      'as' => 'front.index',
      'uses' => 'FrontController@index'
]);

Route::get('categories/{name}', [
    'uses' => 'FrontController@searchCategory',
    'as' => 'front.search.category'
]);

Route::get('tags/{name}', [
    'uses' => 'FrontController@searchTag',
    'as' => 'front.search.tag'
]);

Route::get('products/{id}', [
  'uses' =>'FrontController@viewProduct',
  'as' => 'front.view.product'
]);


Route::resource('front/product', 'CarController');
Route::post('car/store', ['uses' =>
'CarController@store', 'as' =>
'front.product.store']);


Route::get('car', ['uses' =>
'CarController@viewCar', 'as' =>
'/viewCar']);


Route::get('car/{id}/destroy', ['uses' =>
'CarController@destroy', 'as' =>
'front.car.destroy']);

Route::get('car/{id}/deleteItem', ['uses' =>
'CarController@deleteItem', 'as' =>
'front.car.deleteItem']);

//Rutas del panel de administracion
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/', ['as' => 'admin.index', function () {
        return view('admin.index');
    }]);

    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', ['uses' =>
    'UsersController@destroy', 'as' =>
    'admin.users.destroy']);

    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', ['uses' =>
    'CategoriesController@destroy', 'as' =>
    'admin.categories.destroy']);

    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', ['uses' =>
    'TagsController@destroy', 'as' =>
    'admin.tags.destroy']);

    Route::resource('products', 'ProductsController');
    Route::get('products/{id}/destroy', ['uses' =>
    'ProductsController@destroy', 'as' =>
    'admin.products.destroy']);

    Route::get('image', [
        'uses' => 'ImagesController@index',
        'as' => 'admin.images.index'
    ]);

});


Route::get('admin/auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'admin.auth.login'
]);

/*Route::get('admin/auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'admin.auth.logout'
]);*/

Route::get('auth/logout', 'Auth\AuthController@getLogout');

#Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
