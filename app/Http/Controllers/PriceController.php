<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    function showprice(){
        return view('price.index');
    }

    public function getUser()
    {
        $plan = 3;
        return view('auth.login');
    }
}
