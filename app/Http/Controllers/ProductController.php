<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('product.index',[
            'product'=>product::where('user_id',auth()->id())->get(),
      ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('product.create',[
        'active_category'=>categories::where('status','show')->get()
       ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('product_photo')) {
            $file = $request->file('product_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/product_photos/";
            $file->move($path, $filename);
        }
       $lug= Str::slug($request->product_name) . "-" . Str::random(5).Auth()->id();
       $request->validate([
            'category_id'=>'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_short_description' => 'required',
            'product_full_description' => 'required',
            'product_code' => 'required',


       ]);

      product::insert([
       'user_id'=>auth()->id(),
       'category_id'=> $request->category_id,
       'product_name'=> $request->product_name,
       'product_price'=> $request->product_price,
       'product_short_description'=> $request->product_short_description,
       'product_full_description'=> $request->product_full_description,
       'product_code'=> $request->product_code,
       'product_photo'=> $filename,
       'product_slug' => $lug,
      ]);
      return back();

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
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
