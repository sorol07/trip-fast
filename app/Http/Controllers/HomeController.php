<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
    {
        $gallarys = Mission::where('status', 1)
                            ->latest()  // created_at বা updated_at এর ওপর latest
                            ->take(3)    // latest 4 items
                            ->get();

                            // dd($gallarys);

        return view('frontend.pages.home', compact('gallarys'));
}

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function about(){
        return view('frontend.pages.about');
    }
}
