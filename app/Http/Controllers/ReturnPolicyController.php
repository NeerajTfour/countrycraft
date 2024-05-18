<?php

namespace App\Http\Controllers;

use App\Models\return_policy;
use Illuminate\Http\Request;

class ReturnPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = return_policy::first();
        return view('admin.ManagePage.return', compact('data'));
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
        $data = return_policy::firstOrNew(['id' => $request->return_policy_id]);
        $data->text = $request->text;
        $data->save();
        return redirect('/admin/ManagePage/return')->with('success', 'Return policy saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(return_policy $return_policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, return_policy $return_policy)
    {
        $data = return_policy::find($request->return_policy_id);
        if ($data) {
            $data->text = $request->text;
            $data->save();
            return redirect('/admin/ManagePage/return')->with('success', 'Return policy updated successfully.');
        } else {
            return redirect('/admin/ManagePage/return')->with('error', 'Return policy not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, return_policy $return_policy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(return_policy $return_policy)
    {
        //
    }
}
