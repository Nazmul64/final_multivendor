<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\Emailnotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class VendorController extends Controller
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
      return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $random=Str::random(9);
      $user_info=User::create([
            'name'=>$request->vendor_name,
            'email' => $request->vendor_email,
            'phone_number' => $request->vendor_phone,
            'password'=>Hash::make($random),
            'role' =>3,

       ]);
       vendor::insert([
        'user_id'=> $user_info->id,
        'address'=> $request->vendor_address,
       ]);
        Mail::to($request->vendor_email)->send(new Emailnotification($random));
       return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendor $vendor)
    {
        //
    }
}
