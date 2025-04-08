<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userabout extends Controller
{
    function about(){
        return view('about');       
    }
}
