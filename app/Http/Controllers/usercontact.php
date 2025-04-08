<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontact extends Controller
{
    function contact(){
        return view('contact');       
    }
}
