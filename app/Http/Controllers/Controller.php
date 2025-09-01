<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function logout(Request $request)
    {
        $userId = Auth::id();          // লগআউটের আগে ইউজারের আইডি
        $userName = Auth::user()->name; // লগআউটের আগে ইউজারের নাম

        // এখানে চাইলে তুমি Log বা DB তে লগআউট হিস্টোরি রাখতে পারো
        // example: LogoutHistory::create(['user_id' => $userId, 'time' => now()]);

        Auth::logout(); // ইউজার লগআউট হবে

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
