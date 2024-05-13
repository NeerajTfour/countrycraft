<?php

namespace App\Http\Controllers;

use App\Models\chair;
use App\Models\product;
use Illuminate\Http\Request;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chair = chair::get();
        $products = product::where('category_id', 4)->get();
        return view('layouts.chair.index', compact('chair', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sofa()
    {
        $products = product::where('category_id', 12)->get();
        return view('layouts.chair.sofa', compact('products'));
    }
    public function sidetable()
    {
        $products = product::where('category_id', 10)->get();
        return view('layouts.chair.sidetable', compact('products'));
    }
    public function sideboard()
    {
        $products = product::where('category_id', 11)->get();
        return view('layouts.chair.sideboard', compact('products'));
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
    public function show(chair $chair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chair $chair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chair $chair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chair $chair)
    {
        //
    }
}
