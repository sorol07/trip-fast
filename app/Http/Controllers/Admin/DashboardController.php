<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Mission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.welcome'); 
    }

   public function missionIndex()
    {
        $missions = Mission::all();
        return view('admin.mission.index', compact('missions')); 
    }
}
