<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use App\Models\Guide;
use App\Models\Message;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function index()
    {
        $gallarys = Mission::where('status', 1)
                            ->latest()  // created_at বা updated_at এর ওপর latest
                            ->take(3)    // latest 4 items
                            ->get();
        $guides = Guide::where('status', 1)
                            ->latest()  // created_at বা updated_at এর ওপর latest
                            ->get();
                        
        return view('frontend.pages.home', compact('gallarys','guides'));
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function about(){
        $guides = Guide::where('status', 1)
                            ->latest()  // created_at বা updated_at এর ওপর latest
                            ->get();
        return view('frontend.pages.about', compact('guides'));
    }
   public function message(Request $request)
    {
        // return $request;
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with('success', 'Your Message sent successfully!');
    }
}
