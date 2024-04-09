<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('category.index',[
        'categories'=>categories::all(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name_category' => 'required',
            'category_tagline' => 'required',
            'category_photo' => 'required|image', // Ensure it's an image file
        ]);

        if ($request->hasFile('category_photo')) {
            $file = $request->file('category_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/category_photos";

            // Move uploaded file to the specified path
            $file->move($path, $filename);

            // Insert category data into the database
            categories::create([
                'name_category' => $request->name_category,
                'category_tagline' => $request->category_tagline,
                'category_photo' => $filename,
            ]);

            return back()->with('category', 'Category image uploaded successfully');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      return view('category.show',[
        'details'=>categories::all(),
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=categories::find($id);
      return view('category.edit',compact('category'));
      return back()->with('edit', 'Category image uploaded successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       if($request->hasFile('new_category_photo')){
            unlink('uploads/category_photos/' . Categories::find($id)->category_photo);
        $file = $request->file('new_category_photo');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = "uploads/category_photos/";
        $file->move($path, $filename);
            categories::find($id)->update([
                'category_photo' => $filename,
            ]);
       }
        categories::find($id)->update([
             'name_category' => $request->name_category,
            'category_tagline' => $request->category_tagline,
            'status' => $request->status,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $category =categories::find($id);
        unlink('uploads/category_photos/'.$category->category_photo);
     $category ->delete();
      return back()->with('delete','Your data deleted successfully');
    }
}
