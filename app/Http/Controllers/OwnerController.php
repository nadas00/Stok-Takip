<?php

namespace App\Http\Controllers;


use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index',compact('owners',$owners));
    }

    public function create()
    {
        return view('owners.create');
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:owners',

        ]);

        Owner::create($request->all());

        return redirect('/owners');

    }

}
