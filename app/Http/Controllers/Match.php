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

        return view('match.match',compact('owners',$owners,'products',$products));
//,compact('owners',$owners,'products',$products)
    }


}
