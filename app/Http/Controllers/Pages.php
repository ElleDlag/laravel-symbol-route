<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Pages extends Controller
{   
    public function homePage(){
        return view('pages.home');
    }
    public function adminPage(){
        return view('pages.admin');
    }
    public function userPage(){
        return view('pages.user');
    }
};