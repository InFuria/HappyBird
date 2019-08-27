<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(){
        return view('start.index');
    }

    public function about(){
        return view('start.about');
    }

    public function services(){
        return view('start.services');
    }

    public function contact(){
        return view('start.contact');
    }

    public function tags(){
        return view('start.tags');
    }
}
