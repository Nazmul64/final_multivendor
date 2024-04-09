<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function frontend(){
    return view('frontend.index',[
        'categories'=>categories::where('status','show')->get(),
    ]);
  }
}
