<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = about::first();
        return view('layouts.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about = about::first();
        return view('admin.ManagePage.about', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = about::firstOrNew(['id' => $request->about_id]);
        // $about = new about();
        $about->about_text = $request->about_text;
        $about->save();
        return redirect('/admin/ManagePage/about')->with('success', 'about saved successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, about $about)
    {
        $about = about::find($request->about);
        if ($about) {
            $about->text = $request->text;
            $about->save();
            return redirect('/admin/ManagePage/about')->with('success', 'Privacy policy updated successfully.');
        } else {
            return redirect('/admin/ManagePage/about')->with('error', 'Privacy policy not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
