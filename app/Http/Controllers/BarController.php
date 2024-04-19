<?php

namespace App\Http\Controllers;

use App\Models\bar;
use Illuminate\Http\Request;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bar = bar::get();
        return view('layouts.bar.index', compact('bar'));
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
    public function show(bar $bar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bar $bar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bar $bar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bar $bar)
    {
        //
    }
}
