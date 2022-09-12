<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\addEmployee;

class DashboardController extends Controller
{
    public function index()
    {
        $employees=addEmployee::get();
    
        return view('admin', ['employees'=>$employees]);
    }
    public function addEmployee(Request $request)
    {

        $this->validate($request, [
            'name'=>'required|max:255',
            'position'=>'required|max:100',
            'date'=>'required|max:20',
            'hourlyrate'=>'required|max:100',
            'rate'=>'required|max:100',
            'rate'=>'required|max:100',
            'status'=>'required|max:100',
            
       ]);
    
           //save details
          if( addEmployee::create([
            'user_id'=>auth()->id(),
            'name'=>$request->name,
            'position'=>$request->position,
            'date'=>$request->date,
            'hourlyrate'=>$request->hourlyrate,
            'position'=>$request->position,
            'rate'=>$request->rate,
            'status'=>$request->status
    
           ]))
           {

       return back()->with('status','Employee Added successfully');

           }
          else
          {
            return back()->with('status2','Employee could not be added');
          }

         //redirect
       return redirect()->route('dashboard');
    }
}
