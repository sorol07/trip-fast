<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function about(){
        return view('frontend.pages.about');
    }
}
