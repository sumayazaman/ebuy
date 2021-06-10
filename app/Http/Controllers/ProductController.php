<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.index', compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'category_id' => 'required',
            'product_name' => 'required|alpha',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|numeric',
            'product_short_description' => 'required',
            'product_long_description' => 'required',
            'product_alert_quantity' => 'required|numeric',
            'product_photo' => 'required|image'
        ]);

        $photo = Str::random(10).time(). "." .$request -> product_photo -> getClientOriginalExtension();
        Image::make($request -> product_photo)->save(base_path('public/uploads/product/'.$photo));

        Product::create($request->except('_token','product_photo') + [
            'product_photo' => $photo
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request -> hasFile('product_photo')) {
            unlink(base_path('public/uploads/product/'.$product->product_photo));

            $photo = Str::random(10).time(). "." .$request -> product_photo -> getClientOriginalExtension();
            Image::make($request -> product_photo)->save(base_path('public/uploads/product/'.$photo));

            $product -> update([
                'product_photo' => $photo
            ]);
        }

        $product -> update($request -> except('_token','_method','product_photo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        unlink(base_path('public/uploads/product/'.$product->product_photo));
        $product ->delete();
        return back();
    }
}
