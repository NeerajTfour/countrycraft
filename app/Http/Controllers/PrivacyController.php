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
        $privacy = privacy::first();
        return view('layouts.privacy.index', compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $privacy = privacy::first();
        return view('admin.ManagePage.privacy', compact('privacy'));
    }
    // public function returncreate()
    // {
    //     return view('admin.ManagePage.return', compact(''));
    // }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $privacy = Privacy::firstOrNew(['id' => $request->privacy_id]);
        $privacy->text = $request->text;
        $privacy->save();
        return redirect('/admin/ManagePage/privacy')->with('success', 'Privacy policy saved successfully.');
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
    public function edit(Request $request, privacy $privacy)
    {
        // dd($request);
        $privacy = Privacy::find($request->privacy_id);
        if ($privacy) {
            $privacy->text = $request->text;
            $privacy->save();
            return redirect('/admin/ManagePage/privacy')->with('success', 'Privacy policy updated successfully.');
        } else {
            return redirect('/admin/ManagePage/privacy')->with('error', 'Privacy policy not found.');
        }
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
