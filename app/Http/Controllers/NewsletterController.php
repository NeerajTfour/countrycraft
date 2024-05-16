<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletter = newsletter::all();
        return view('admin.newsletter.index', compact('newsletter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {
        $newsletter = newsletter::latest()->paginate(5);
        return view('admin.newsletter.index', compact('newsletter'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        // Check if a search query exists
        if ($search) {
            $newsletter = newsletter::where('name', 'like', "%$search%")->paginate(5);
        } else {
            // If no search query, fetch all records with pagination
            $newsletter = newsletter::paginate(10);
        }

        return view('admin.newsletter.index', compact('newsletter', 'search'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new newsletter;
        $news->email = $request->email;

        $news->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, newsletter $newsletter)
    {
        $id = $request->id;
        $newsletter = newsletter::find($id);
        $newsletter->delete();
        return response()->json('success');
    }
}
