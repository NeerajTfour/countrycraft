<?php

namespace App\Http\Controllers;

use App\Models\fair;
use Illuminate\Http\Request;

class FairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fair = fair::get();
        return view('layouts.fair.index', compact('fair'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fair $fair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fair $fair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fair $fair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fair $fair)
    {
        //
    }
}
