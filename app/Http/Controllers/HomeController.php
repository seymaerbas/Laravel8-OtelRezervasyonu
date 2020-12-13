<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function header()
    {
       return view('home.header');
    }
    public function aboutus()
    {
        return view('home.about');
    }
}
