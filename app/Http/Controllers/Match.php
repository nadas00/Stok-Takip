<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Product;


use Illuminate\Http\Request;

class Match extends Controller
{

    public function index()
    {
        $owners = Owner::all();
        $products = Product::all();


        return view('match.index', compact('owners', $owners, 'products', $products));
//,compact('owners',$owners,'products',$products)
    }


    public function store(Request $request)
    {


        $validatedData = $request->validate([

            'productSelector' => 'required',
            'ownerSelector' => 'required',

        ]);


        Match::create($request->all());
        return redirect('/match');

    }

    public function create()
    {
        $owners = Owner::all();
        $products = Product::all();

        return view('match.create', compact('owners', $owners, 'products', $products));
    }


}
