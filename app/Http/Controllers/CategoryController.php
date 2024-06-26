<?php

namespace App\Http\Controllers;

// use App\Models\category;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('status', '1')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('category_id')->get();
        return view('admin.category.add', compact('categories'));
        // dd($categories);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function view()
    {
        $categories = category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }
    public function search(Request $request)
    {
        $search = $request->search;

        // Check if a search query exists
        if ($search) {
            $categories = category::where('name', 'like', "%$search%")->paginate(5);
        } else {
            // If no search query, fetch all records with pagination
            $categories = category::paginate(10);
        }

        return view('admin.category.index', compact('categories', 'search'));
    }
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
        );
        // dd($data);
        $create = Category::create($data);
        return redirect()->route('category.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, category $category)
    {
        $id = $request->id;
        $categories = Category::whereNull('category_id')->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
        );
        // dd($data);
        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('category.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, category $category)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        return response()->json('success');
    }
}
