<?php

namespace App\Http\Controllers;

use App\Models\privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacy = privacy::get();
        return view('layouts.privacy.index', compact('privacy'));
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
    public function show(privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(privacy $privacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, privacy $privacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(privacy $privacy)
    {
        //
    }
}