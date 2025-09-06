<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guide::all();

        return view('admin.guides.index', compact('guides'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guide = new Guide();
        $guide->name = $request->name; 
        if ($request->hasFile('image')) {
            // ফাইল স্টোর করা হবে storage/app/public/missions ফোল্ডারে
            $path = $request->file('image')->store('guides', 'public');

            // ডাটাবেসে path save করবো
            $guide->image = '/storage/' . $path; 
        }

        $guide->save(); 
         return redirect()->route('guides.index')->with('message', 'New Guide created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guide = Guide::find($id);
        $guide->status = $guide->status == 1 ? 0 : 1;
        $guide->save();

        return redirect()->back()->with('message', 'Guide Status updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.guides.edit', [
            'guide' => Guide::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guide = Guide::findOrFail($id);
        $guide->name = $request->name;

        // নতুন ইমেজ এসেছে কিনা চেক
        if ($request->hasFile('image')) {

            // আগের ইমেজ ডিলেট করা
            if ($guide->image && Storage::disk('public')->exists(str_replace('/storage/', '', $guide->image))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $guide->image));
            }

            // নতুন ইমেজ সেভ করা
            $path = $request->file('image')->store('guides', 'public');
            $guide->image = '/storage/' . $path;
        }
        // যদি নতুন ইমেজ না আসে, আগের ইমেজই থাকবে

        $guide->save();

        return redirect()->route('guides.index')->with('message', 'Guide updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
