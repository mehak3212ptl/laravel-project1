<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userblogs extends Controller
{
    function blogs(){
        return view('blogs');       
    }

    function firstblog(){
        return view('blogs.first');       
    }

    function secondblog(){
        return view('blogs.second');       
    }
}
