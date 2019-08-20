<?php

namespace App\Http\Controllers;


use App\Owner;
use App\Product;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners', $owners));
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'ownerNameVar' => 'required|unique:owners|max:50',
            'profil' => 'required'

        ]);

        Owner::create($request->all());

        return redirect('/owners');

    }


}
