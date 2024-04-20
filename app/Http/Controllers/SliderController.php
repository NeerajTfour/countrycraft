<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = slider::all();
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
        // dd($request);
        $request->validate([
            'title' => 'required',
            'para' => 'required',
            'bname' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,git,webp|max:100000',
        ]);
        $image = '';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('slider'), $imageName);
            $image = '' . $imageName;
        }
        $slider = new slider;
        $slider->title = $request->title;
        $slider->para = $request->para;
        $slider->bname = $request->bname;
        $slider->image = $image;

        $slider->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slider $slider)
    {
        //
    }
}
