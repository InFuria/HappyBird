<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        return view('nav.index');
    }

    public function scroll(){
        return view('nav.scroll_color');
    }

    public function cards(){
        return view('nav.cards');
    }

    public function testimonials(){
        return view('nav.testimonials');
    }

    public function sticky(){
        return view('nav.sticky');
    }
}
