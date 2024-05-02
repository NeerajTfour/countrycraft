<?php

namespace App\Http\Controllers;

use App\Models\b_slider;
use Illuminate\Http\Request;

class BSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bslider = b_slider::get();
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'pro_name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,git,webp|max:100000',
        ]);
        $image = '';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('b_slider'), $imageName);
            $image = '' . $imageName;
        }
        $bslider = new b_slider;
        $bslider->heading = $request->heading;
        $bslider->pro_name = $request->pro_name;
        $bslider->image = $image;
        $bslider->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(b_slider $b_slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(b_slider $b_slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, b_slider $b_slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(b_slider $b_slider)
    {
        //
    }
}
