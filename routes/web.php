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
    return redirect("/products/create");
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

Route::get('/products/delete/{id}', function ($id)
{
    DB::table('products')->where('id', '=', $id)->delete();
    return redirect('/products');
});









// kullanıcı route'ları

Route::get('/owners/create', 'OwnerController@create');

Route::post('/owners', 'OwnerController@store');

Route::get('/owners', 'OwnerController@index');


//tabloda delete'e tıklandığında database'ten record'u silmeye yarayan route

Route::get('/owners/delete/{id}', function ($id)
{
    DB::table('owners')->where('id', '=', $id)->delete();
    return redirect('/owners');
});











// Ürün'e kullanıcı atama route'u

Route::get('/match', 'Match@index');




// Owner Product one to many ilişkisi deneme route'ları

Route::get('/denden', function () {
   dd(\App\Owner::find(1)->product);
});
Route::get('/den', function () {
   dd(\App\Product::find(1)->owner);
});


Route::get('/owners/delete/{id}', function ($id)
{
    DB::table('owners')->where('id', '=', $id)->delete();
    return redirect('/owners');
});

