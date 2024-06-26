<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = contact::get();
        return view('admin.contact.index', compact('contact'));
    }
    public function view()
    {
        $contact = contact::latest()->paginate(10);
        return view('admin.contact.index', compact('contact'));
    }
    public function search(Request $request)
    {
        $search = $request->search;

        // Check if a search query exists
        if ($search) {
            $contact = contact::where('name', 'like', "%$search%")->paginate(5);
        } else {
            // If no search query, fetch all records with pagination
            $contact = contact::paginate(10);
        }

        return view('admin.contact.index', compact('contact', 'search'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->msg = $request->msg;
        $contact->save();
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, contact $contact)
    {
        $id = $request->id;
        $contact = contact::find($id);
        $contact->delete();
        return response()->json('success');
    }
}
