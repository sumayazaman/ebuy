<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
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
            'category_name' => 'required|unique:categories',
            'category_image' => 'required|image|max:100|'
        ]);

        $image = Str::random(10).time(). "." .$request -> category_image -> getClientOriginalExtension();
        Image::make($request -> category_image)->save(base_path('public/uploads/category/'.$image));

        Category::insert([
            'category_name' => $request -> category_name,
            'category_image' => $image,
            'created_at' => now()
        ]);

        return back()->with('status', 'Category '.$request->category_name. ' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // return $request->category_image;
        if ($request -> category_name) {
            if (Category::where('category_name', $request -> category_name) ->doesntExist()) {
                $category-> category_name = $request -> category_name;
            }
        }

        if ($request -> hasFile('category_image')) {
            unlink(base_path('public/uploads/category/'.$category->category_image));

            $image = Str::random(10).time(). "." .$request -> category_image -> getClientOriginalExtension();
            Image::make($request -> category_image)->save(base_path('public/uploads/category/'.$image));

            $category -> category_image = $image;
        }

        $category -> save();

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category -> delete();
        unlink(base_path('public/uploads/category/'.$category->category_image));
        return back();
    }

    public function destroyall()
    {
        Category::truncate();
        $images = glob(base_path('public/uploads/category/*')); //get all file names
        foreach($images as $image){
            unlink($image);
        }
        return back();
    }

    public function deleteselected(Request $request)
    {  
        foreach ($request->category_id as $category_id) {
            $category = Category::find($category_id);
            unlink(base_path('public/uploads/category/'.$category->category_image));
            $category->delete();
        }

        return back();
    }
}
