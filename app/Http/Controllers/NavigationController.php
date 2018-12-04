<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home(){
        return view('home');
    }

    public function maladie(){
        return view('maladie');
    }
    public function association(){
        return view('association');
    }

    public function services(){
        return view('services');
    }

    public function blog(){
        return view('blog');
    }
}
