<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('category_id')->get();
        return view('admin.product.add', compact('categories'));
    }
    public function view()
    {
        $products = product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }
    public function search(Request $request)
    {
        $search = $request->search;

        // Check if a search query exists
        if ($search) {
            $products = product::where('product_name', 'like', "%$search%")->paginate(5);
        } else {
            // If no search query, fetch all records with pagination
            $products = product::paginate(10);
        }

        return view('admin.product.index', compact('products', 'search'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = '';
        if ($request->hasFile('image_1')) {
            $imageName = time() . '.' . $request->image_1->extension();
            $request->image_1->move(public_path('product'), $imageName);
            $image = '' . $imageName;
        }
        $image_2 = '';
        if ($request->hasFile('image_2')) {
            $imageName = time() . '.' . $request->image_2->extension();
            $request->image_2->move(public_path('product'), $imageName);
            $image_2 = '' . $imageName;
        }
        $product = new product;
        $product->product_type = $request->product_type;
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_number = $request->product_number;
        // $product->image = implode(',', $images);
        $product->sku_code = $request->sku_code;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->specification_1 = $request->specification_1;
        $product->specification_2 = $request->specification_2;
        $product->specification_3 = $request->specification_3;
        $product->specification_4 = $request->specification_4;
        $product->meterial = $request->meterial;
        $product->lenght = $request->lenght;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->finish = $request->finish;
        $product->image_1 = $image;
        $product->image_2 = $image;
        $product->image_3 = $image;
        $product->image_4 = $image;
        // dd($product);
        $product->save();
        // $data = array(
        //     'product_name' => $request->product_name,
        //     'category_id' => $request->category_id,
        //     'product_type' => $request->product_type,
        //     'product_number' => $request->product_number,
        //     'sku_code' => $request->sku_code,
        //     'specification_1' => $request->specification_1,
        //     'specification_2' => $request->specification_2,
        //     'specification_3' => $request->specification_3,
        //     'specification_4' => $request->specification_4,
        //     'image_1' => $request->image_1,
        //     'image_2' => $request->image_2,
        //     'image_3' => $request->image_3,
        //     'image_4' => $request->image_4,
        //     'short_description' => $request->short_description,
        //     'description' => $request->description,
        //     'meterial' => $request->meterial,
        //     'finish' => $request->finish,
        //     'lenght' => $request->lenght,
        //     'height' => $request->height,
        //     'width' => $request->width,
        // );
        // if ($request->hasFile('image_1')) {
        //     $imageNames = [];
        //     foreach ($request->file('image_1') as $image) {
        //         $imageName = time() . '_' . $image->getClientOriginalName();
        //         $image->move(public_path('product'), $imageName);
        //         $imageNames[] = $imageName;
        //     }
        //     $data['images'] = implode(',', $imageNames); // Store image names as comma-separated string
        // }
        // if ($request->hasFile('image')) {
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('product'), $imageName);
        //     $data['image'] = '' . $imageName;
        // }
        // if ($request->hasFile('image')) {
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('product'), $imageName);
        //     $image = '' . $imageName;
        // }
        // $create = product::create($data);
        // $data->save();
        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, product $product)
    {
        $id = $request->id;
        $product = product::findOrFail($id);
        $categories = Category::whereNull('category_id')->get();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $id = $request->id;
        $data = array(
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'product_type' => $request->product_type,
            'product_number' => $request->product_number,
            'sku_code' => $request->sku_code,
            'specification_1' => $request->specification_1,
            'specification_2' => $request->specification_2,
            'specification_3' => $request->specification_3,
            'specification_4' => $request->specification_4,
            'image_1' => $request->image_1,
            'image_2' => $request->image_2,
            'image_3' => $request->image_3,
            'image_4' => $request->image_4,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'meterial' => $request->meterial,
            'finish' => $request->finish,
            'lenght' => $request->lenght,
            'height' => $request->height,
            'width' => $request->width,
        );

        if ($request->hasFile('image_1')) {
            $imageName = time() . '.' . $request->image_1->extension();
            $request->image_1->move(public_path('product'), $imageName);
            $data['image_1'] = '' . $imageName;
        }
        $create = product::where('id', $id)->update($data);
        return redirect()->route('product.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, product $product)
    {
        $id = $request->id;
        $product = product::find($id);
        $product->delete();
        return response()->json('success');
    }
    public function prodetail(Request $request, product $product)
    {
        $id = $request->id;
        $products = product::with('product')->first();
        // dd($products);
        return view('layouts.product.prodetail', compact('products'));
    }
}
