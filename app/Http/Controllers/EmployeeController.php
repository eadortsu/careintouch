<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addEmployee;

use App\Models\registry;

use App\Models\User;

use App\Models\paysummary;

use App\Models\patients;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)

    { //if employee details already exists in addEmployee table and registries table, then add them
        if(addEmployee::where('email',auth()->user()->email)->exists() && registry::where('user_id',auth()->user()->id)->exists())
        {
           //get total number of patients from current user
              $patients=patients::where('user_id',auth()->user()->id)->count();

           
        $employees = addEmployee::where('user_id',auth()->user()->id)->get();
        $registry = registry::where('user_id',auth()->user()->id)->get();
        $paysummary= paysummary::where('user_id',auth()->user()->id)->get();
        return view('employeeAccount',[
            'employees'=>$employees,
            'registries'=>$registry,
            'paysummaries'=>$paysummary,
            'patients'=>$patients,
        ]);
           
        }
        else{
            

            addEmployee::create([
                'user_id'=>auth()->id(),
                'name'=>auth()->user()->name,
                'email'=>auth()->user()->email,
        
               ]);
        
               Registry::create([
                'user_id'=>auth()->id(),
                'employee_id'=>addEmployee::where('email',auth()->user()->email)->value('id'),
                'typeofemployment'=>'longterm',
                'registrytype'=>'RN',
                'status'=>'active',
               ]);

               //redirect to employee details page
               return redirect()->route('employee');
        }
        //get registry positions of the logged in user

        
    }

   
    public function paysummary(Request $request)
    {
        //get input from form
        $date = $request->date;
        $rate = $request->rate;
        $visits = $request->visits;
        $numberofmiles = $request->numberofmiles;
        $totalrate = $request->totalrate;
        $ratetype=$request->checkht." ".$request->checkwe;
        $patientname=$request->patientname;
        $comments = $request->comments;
        $typeofvisit = $request->typeofvisit;
        $miles = $request->miles;
               //dd($request->all());

       //find current employee id
         $employee_id_unique = addEmployee::where('user_id',auth()->user()->id)->where('id',$request->employee_id)->first();

        //validate input
        // $this->validate($request, [
        //     'date'=>'required|max:255',
        //     'rate'=>'required|max:100',
        //     'numberofvisits'=>'required|max:20',
        //     'numberofmiles'=>'required|max:100',
        //     'totalrate'=>'required|max:100',
        //     'comments'=>'required|max:100',
        //     'typeofvisit'=>'required|max:100',
        //     'miles'=>'required|max:100',
        // ]);

        //add to paysummary table
       paysummary::create([
            'user_id'=>auth()->id(),
            'patient_name'=>$patientname,
            'employee_id_unique'=>addEmployee::where('email',auth()->user()->email)->value('id'),
            'date'=>$date,
            'rate'=>$rate,
            'numberofvisits'=>$visits,
            'numberofmiles'=>$numberofmiles,
            'totalrate'=>$totalrate,
            'ratetype'=>$ratetype,
            'comments'=>$comments,
            'typeofvisit'=>$typeofvisit,
            'milesusd'=>$miles,
            'status'=>'pending',
        ]);
        //add to patients table
        patients::create([
            'user_id'=>auth()->id(),
            'employee_id'=>addEmployee::where('name',auth()->user()->name)->value('id'),
            'patient_name'=>$patientname,
            'nmberofvisits'=>$visits,
           
        ]);
        return back()->with('statusreg','Paysummary added successfully');
    }
}
