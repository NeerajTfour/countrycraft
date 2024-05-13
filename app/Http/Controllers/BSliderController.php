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
        return view('admin.slider.index', compact('bslider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view(b_slider $b_slider)
    {
        $bslider = b_slider::get()->paginate(5);
        return view('admin.slider.bslider', compact('bslider'));
    }
    public function search(Request $request)
    {
        $search = $request->search;

        // Check if a search query exists
        if ($search) {
            $bslider = b_slider::where('name', 'like', "%$search%")->paginate(5);
        } else {
            // If no search query, fetch all records with pagination
            $bslider = b_slider::paginate(5);
        }

        return view('admin.slider.index', compact('bslider', 'search'));
    }
    public function create()
    {
        $bslider = b_slider::get();
        return view('admin.slider.bslider', compact('bslider'));
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
    public function edit(b_slider $b_slider, $id)
    {
        $bslider = b_slider::where('id', $id)->first();
        return view('admin.slider.bsliderEdit', compact('bslider'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, b_slider $b_slider, $id)
    {
        $bslider = b_slider::find($id);
        $image = '';

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('b_slider'), $imageName);
            $image = '' . $imageName;
        }
        $bslider->heading = $request->heading;
        $bslider->pro_name = $request->pro_name;
        $bslider->image = $image;
        $bslider->save();
        return redirect()->route('b_slider.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, b_slider $b_slider)
    {
        $id = $request->id;
        $b_slider = b_slider::find($id);
        $b_slider->delete();
        return response()->json('success');
    }
}
