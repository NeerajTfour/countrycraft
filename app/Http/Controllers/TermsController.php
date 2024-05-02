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
        $terms = terms::first();
        return view('layouts.terms.terms', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ManagePage.term');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $terms = new terms;
        $terms->text = $request->text;

        $terms->save();
        return back();
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
    public function edit(Request $request, terms $terms)
    {
        $terms = terms::findOrFail($request->terms_id);
        if ($terms) {
            $terms->text = $request->text;
            $terms->save();
            return redirect('/admin/ManagePage/terms');
        } else {
            return redirect('/admin/ManagePage/terms');
        }
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
