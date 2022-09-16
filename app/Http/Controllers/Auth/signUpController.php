<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class signUpController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
   public function index()
    {
        return view('auth.signup');
    } 

    public function save(Request $request)
    {
       //validation

       $this->validate($request, [
        'name'=>'required|max:255',
        'email'=>'required|email|max:100',
        'password'=>'required|confirmed|min:6'
   ]);
//laravel function to check if email exists in users table
    if(User::where('email',$request->email)->exists())
    {
        return back()->with('status','Email already exists');
    }
       //save details
       User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role'=>'employee',

       ]);
    

       //sign in user

       auth()->attempt ($request->only('email','password','role'));

       //redirect
       if(auth()->user()->role=='admin')
       {
        return redirect()->route('dashboard');
       }
       else
       {
        return redirect()->route('employee');
       }
      
    }
}
