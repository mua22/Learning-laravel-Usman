<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/products',             'ProductsController@index');
Route::get('/products/{id}/edit',   'ProductsController@edit');
Route::put('/products/{id}',        'ProductsController@update');
Route::get('/products/create',      'ProductsController@create');
Route::delete('/products/{id}', 'ProductsController@destroy');
Route::post('/products',            'ProductsController@store');
Route::get('/products/{id}',        'ProductsController@show');


//Route::resource('/myproducts', 'ProductsController');
