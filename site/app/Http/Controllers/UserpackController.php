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
        $card = (
            [
                'number' => $request->input('card_number'),
                'name' => $request->input('card_name'),
                'month' => $request->input('card_month'),
                'year' => $request->input('card_year'),
                'cvv' => $request->input('card_cvv'),
            ]
        );

        // $replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $card['number']);

        dd($card['number']);
    }
}
