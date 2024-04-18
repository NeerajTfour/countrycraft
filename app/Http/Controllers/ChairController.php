<?php

namespace App\Http\Controllers;

use App\Models\chair;
use Illuminate\Http\Request;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chair = chair::get();
        return view('chair.index', compact('chair'));
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
