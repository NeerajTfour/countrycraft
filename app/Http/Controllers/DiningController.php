<?php

namespace App\Http\Controllers;

use App\Models\dining;
use App\Models\product;
use Illuminate\Http\Request;

class DiningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dining = dining::get();
        $products = product::where('category_id', 8)->latest()->get();
        return view('layouts.dining.index', compact('dining', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function coffee()
    {
        $products = product::where('category_id', 5)->latest()->get();
        return view('layouts.dining.coffee', compact('products'));
    }
    public function console()
    {
        $products = product::where('category_id', 6)->latest()->get();
        return view('layouts.dining.console', compact('products'));
    }
    public function bedside()
    {
        $products = product::where('category_id', 2)->latest()->get();
        return view('layouts.dining.bedside', compact('products'));
    }
    public function desk()
    {
        $products = product::where('category_id', 7)->latest()->get();
        return view('layouts.dining.desk', compact('products'));
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
    public function show(dining $dining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dining $dining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dining $dining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dining $dining)
    {
        //
    }
}
