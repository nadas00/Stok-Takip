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
    return view('welcome');
});




// laravel auth route'ları

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// ürün route'ları

Route::get('/products/create', 'ProductController@create');

Route::post('/products', 'ProductController@store');

Route::get('/products', 'ProductController@index');





// kullanıcı route'ları

Route::get('/owners/create', 'OwnerController@create');

Route::post('/owners', 'OwnerController@store');

Route::get('/owners', 'OwnerController@index');




// Ürün'e kullanıcı atama route'u

Route::get('/match', 'Match@index');




