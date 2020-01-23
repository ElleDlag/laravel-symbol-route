<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{   
    public function homePage(){
        return view('main.home');
    }

    public function aboutPage(){
        return view('main.about');
    }
};