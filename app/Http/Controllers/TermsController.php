<?php

namespace App\Http\Controllers;

use App\Models\terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $term = terms::get();
        return view('layouts.terms.terms', compact('term'));
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
    public function show(terms $terms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(terms $terms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, terms $terms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(terms $terms)
    {
        //
    }
}
