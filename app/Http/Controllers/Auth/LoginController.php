<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
   public function index(Request $request)
   {
    return view('auth.index');
   }
   
   public function save(Request $request)
   {  
    $this-> validate($request,[
   'email'=>'required|email',
   'password'=>'required',
]);

         //sign in user

         if (!auth()->attempt ($request->only('email','password','role'),$request->remember))
         {
            return back()->with('status','Invalid login details');
         }

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
