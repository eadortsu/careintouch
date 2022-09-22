<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\registry;

use App\Models\User;

use App\models\addEmployee;

use App\models\patients;

use App\models\paysummary;


class RegistryController extends Controller
{
   
  
   //get all registry
    public function getRegistry(Request $request)
    {
        $registries = registry::paginate(100);
        $paysummary = paysummary::paginate(100);
        $employees=addEmployee::paginate(100);
        return view('registry',[
            'registries'=>$registries,
            'employees'=>$employees,
            'paysummaries'=>$paysummary,
        ]);
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
            'employee_id_unique'=>addEmployee::where('name',auth()->user()->name)->value('id'),
            'date'=>$date,
            'rate'=>$rate,
            'visits'=>$visits,
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
