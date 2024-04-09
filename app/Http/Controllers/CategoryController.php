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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name_category'=>'required',
    //         'category_tagline' => 'required',
    //         'category_photo' => 'required',
    //     ]);
    //   if($request->hasFile('category_photo')){
    //    $file=$request->file('category_photo');
    //    $filename=time() . '.' . $file->getClientOriginalExtension();
    //    $path= "uploads/category_photos";
    //    $request->category_photo->move($filename,$path);
    //    categories::insert([
    //     'name_category' => $request['name_category'],
    //     'category_tagline' => $request['category_tagline'],
    //     'category_photo' => $filename,
    //    ]);
    //    return back()->with('category','Category Image uploads successfully');
    //   }

    // }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
