<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function profile(){
       return view('profilesetting');
    }
    public function profilesetting(Request $request)
    {
        $request->validate([
          'name'=>'required',
          'profile_photo' => 'required',
        ]);
        if ($request->hasFile('profile_photo')) {
            if (auth()->user()->profile_photo !== 'avator.jepg') {
                unlink('uploads/profile_photos' .auth()->user()->profile_photo);
            }

            $file = $request->file('profile_photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/profile_photos';
            $request->profile_photo->move($path, $fileName);
            User::find(auth()->user()->id)->update([
                'profile_photo' => $fileName,
            ]);
        }
        User::find(auth::id())->update([
            'name' => $request['name'],
        ]);
        return back()->with('name', 'Name  and profile updated successfully ');
    }
    public function changespassowrd(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required',
            'confirmation' => 'required',
        ]);
        if(Hash::check($request->old_password,Auth::user()->password)){
           if($request->password==$request->confirmation){
             User::find(Auth::id())->update([
                Hash::make($request->password),
             ]);
             return back()->with('password','Password Changes Successfully ');
           }else{
               return back()->withErrors('New Password and confirm password does not match in our records');
           }
        }else{
            return back()->withErrors('Old Password Does Not Match in our records');
        }
    }
}
