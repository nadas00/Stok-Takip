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

use App\Product;

Route::get('/', function () {
    return redirect("/products");
});


// laravel auth route'ları

Auth::routes();

Route::get('/home', 'OwnerController@index');










Route::group(['middleware' => 'auth'], function () {



    Route::get('/products/create', 'ProductController@create');
    Route::get('/owners/create', 'OwnerController@create');
    Route::get('/match/create', 'Match@create');


});












// ürün route'ları



Route::post('/products', 'ProductController@store');

Route::get('/products', 'ProductController@index');


Route::get('/products/delete/{id}', function ($id) {
    DB::table('products')->where('id', '=', $id)->delete();
    return redirect('/products');
});


// kullanıcı route'ları



Route::post('/owners', 'OwnerController@store');

Route::get('/owners', 'OwnerController@index');


//tabloda delete'e tıklandığında database'ten record'u silmeye yarayan route

Route::get('/owners/delete/{id}', function ($id) {
    DB::table('owners')->where('id', '=', $id)->delete();
    return redirect('/owners');
});


// Owner Product one to many ilişkisi deneme route'ları

Route::get('/denden', function () {
    dd(\App\Owner::find(1)->product);
});
Route::get('/den', function () {
    dd(Product::find(1)->owner);
});


Route::get('/owners/delete/{id}', function ($id) {
    DB::table('owners')->where('id', '=', $id)->delete();
    return redirect('/owners');
});


// Ürün'e kullanıcı atama route'u



Route::post('/match/create', 'Match@store');

Route::get('/match', 'Match@index');


Route::get('/match/matched/{id}/{id2}', function ($id, $id2) {
    DB::table('products')->where('id', '=', $id)->update(['owner_id' => $id2]);
    return redirect("/match");

});



Route::get('/match/delete/{id}', function ($id) {
    DB::table('products')->where('id', '=', $id)->update(['owner_id' => null]);
    return redirect("/match");

});

Route::get('/intro', function () {

    return view("intro");
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');





Route::get('/products/buy/{id}', function ($id) {
   $productSelected = Product::where('id',$id)->get()->first->id;

    return view("products.buy",compact('productSelected',$productSelected,'id',$id));

});


Route::get('/products/buy/{id}/{amount}', function ($id,$amount) {


  $currAmount =  Product::where('id',$id)->get()->first()->amount;
  $newAmount = $currAmount - $amount;

  if ($newAmount<0){
      $hatamesaji= "Ürün stok miktarı sıfırın altında olamaz!";
      return view("products.basarisiz",compact('hatamesaji',$hatamesaji));
  }else{


      App\Product::where('id', $id)
          ->update(['amount' => $newAmount]);

$mesaj = $amount." ürün stoktan başarılı şekilde silindi.";
    return view("products.basarili",compact('mesaj',$mesaj));



}
});




//add route'ları

Route::get('/products/add/{id}', function ($id) {
    $productSelected = Product::where('id',$id)->get()->first->id;

    return view("products.add",compact('productSelected',$productSelected,'id',$id));

});


//input formundan amount bilgisi buraya gönderilecek
Route::get('/products/add/{id}/{amount}', function ($id,$amount) {

    $currAmount =  Product::where('id',$id)->get()->first()->amount;
    $newAmount = $currAmount + $amount;

    if($newAmount>100000){
        $hatamesaji= "Stok miktarı en fazla 100000 olabilir.";
        return view("products.basarisiz",compact('hatamesaji',$hatamesaji));
    }else {


        App\Product::where('id', $id)
            ->update(['amount' => $newAmount]);

$mesaj = $amount." ürün stoğa başarılı şekilde eklendi.";
        return view("products.basarili",compact('mesaj',$mesaj));
    }
});