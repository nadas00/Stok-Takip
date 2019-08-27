<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }


    /*
     public function createtable()
        {
            $items = array(
                'itemlist' =>  DB::table('products')->get()
            );

            return view('prices.create', $items);
        }
    https://stackoverflow.com/questions/29508297/laravel-5-how-to-populate-select-box-from-database-with-id-value-and-name-value
     */

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'productName' => 'required|unique:products|max:50',
            'amount' => 'required|numeric|max:10000',
            'company' => 'required',
            'available' => 'required',
            'description' => 'required|max:500',


        ]);

        Product::create($request->all());
        return redirect('/products');



    }


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products', $products));
    }





}
