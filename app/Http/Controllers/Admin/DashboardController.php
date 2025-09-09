<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function MessageIndex()
    {
        $messages = Message::all();
        return view('admin.message.index', compact('messages')); 
    }

    public function missionAdd(){
        return view('admin.mission.create');
    }

    public function missionStore(Request $request)
    {
        // validation করা ভালো
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $mission = new Mission();

        if ($request->hasFile('image')) {
            // ফাইল স্টোর করা হবে storage/app/public/missions ফোল্ডারে
            $path = $request->file('image')->store('missions', 'public');

            // ডাটাবেসে path save করবো
            $mission->image = '/storage/' . $path; 
        }

        $mission->save();

        return redirect()->route('mission.index')->with('success', 'Mission created successfully!');
    }
    public function missionEdit($id){
        $mission = Mission::findOrFail($id);
        return view('admin.mission.edit',compact('mission'));
    }

    public function missionUpdate(Request $request, $id)
    {
        $mission = Mission::findOrFail($id);

        // নতুন ইমেজ এসেছে কিনা চেক
        if ($request->hasFile('image')) {

            // আগের ইমেজ ডিলেট করা
            if ($mission->image && Storage::disk('public')->exists(str_replace('/storage/', '', $mission->image))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $mission->image));
            }

            // নতুন ইমেজ সেভ করা
            $path = $request->file('image')->store('missions', 'public');
            $mission->image = '/storage/' . $path;
        }
        // যদি নতুন ইমেজ না আসে, আগের ইমেজই থাকবে

        $mission->save();

        return redirect()->route('mission.index')->with('success', 'Mission updated successfully!');
}

    public function missionStatus($id)
    {
        $mission = Mission::find($id);
        $mission->status = $mission->status == 1 ? 0 : 1;
        $mission->save();

        return redirect()->back()->with('success', 'Mission Status updated');
    }
    public function messageStatus($id)
    {
        $message = Message::find($id);
        $message->status = $message->status == 1 ? 0 : 1;
        $message->save();

        return redirect()->back()->with('success', 'Message Action Status updated');
    }

}
