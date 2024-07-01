<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noraebangController extends Controller
{
    //INDEX
    function landing() {
        return view('landing.landing');
    }
    function signup(){
        return view('signup');
    }
    function signin() {
        return view('signin');
    }

    function index() {
        return view('index');
    }

    function setting() {
        return view('setting');
    }

    function search() {
        return view('search');
    }

    public function create()
    {
        return view('register');
    }
}