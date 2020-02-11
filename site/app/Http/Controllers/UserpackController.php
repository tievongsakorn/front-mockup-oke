<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserpackController extends Controller
{
    public function index()
    {   
        return view('pages.package');
    }

    public function store(Request $request)
    {
        $packno = $request->input('package'); 

        dd($packno) ;
    }
}
