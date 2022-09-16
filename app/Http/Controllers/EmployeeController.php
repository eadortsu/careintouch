<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\addEmployee;

use App\models\registry;

use App\Models\User;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        //get registry positions of the logged in user

        $employees = addEmployee::where('user_id',auth()->user()->id)->get();
        return view('employeeAccount',[
            'employees'=>$employees,
        ]);
        
    }

    public function paysummary()
    {
        dd($employees);
    }
}
