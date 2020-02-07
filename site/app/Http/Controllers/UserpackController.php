<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserpackController extends Controller
{
    public function index()
    {   

        return view('pages.payment');
    }
}
