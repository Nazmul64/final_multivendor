<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend()
    {
        if(Category::where('status','show')->count()==0){
            $categories= Category::latest()->limit(3)->get();
        }else{
            $categories = Category::where('status', 'show')->get();
        }
        $allproduct =product::all();
        return view('frontend.index',compact('categories', 'allproduct'));

    }
    public function productdetails($slug)
    {

       $single_product_info=product::where('product_slug',$slug)->firstOrFail();
        return view('frontend.productdetails',compact('single_product_info'));
    }
}
