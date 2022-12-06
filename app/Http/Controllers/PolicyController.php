<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    function showpolicy(){
        return view('policy.index');
    }
}
