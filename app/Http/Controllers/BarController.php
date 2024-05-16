<?php

namespace App\Http\Controllers;

use App\Models\bar;
use App\Models\product;
use Illuminate\Http\Request;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bar = bar::get();
        $products = product::where('category_id', 1)->latest()->get();
        return view('layouts.bar.index', compact('bar', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tv()
    {
        $products = product::where('category_id', 13)->latest()->get();
        return view('layouts.bar.tv', compact('products'));
    }
    public function bookselves()
    {
        $products = product::where('category_id', 3)->latest()->get();
        return view('layouts.bar.bookselves', compact('products'));
    }
    public function shelving()
    {
        $products = product::where('category_id', 9)->latest()->get();
        return view('layouts.bar.shelving', compact('products'));
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
