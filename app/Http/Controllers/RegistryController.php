<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\registry;

use App\Models\User;

use App\Models\addEmployee;

use App\Models\patients;

use App\Models\paysummary;


class RegistryController extends Controller
{
    //function to logout after 5 minutes
    function logoutAfterFiveMinutes()
    {
           $timeout = 5; // Set timeout minutes
           $logout_redirect_url = "/"; // Set logout URL

           $timeout = $timeout * 60; // Converts minutes to seconds
           if (isset($_SESSION['start_time'])) {
               $elapsed_time = time() - $_SESSION['start_time'];
               if ($elapsed_time >= $timeout) {
                   session_destroy();
                   echo "<script>alert('Your session has expired!')</script>";
                   echo "<script>window.location.href='$logout_redirect_url'</script>";
               }
           }
           $_SESSION['start_time'] = time();

    }
  
   //get all registry
    public function getRegistry(Request $request)
    {
          $employees=addEmployee::join('paysummaries','employee_id_unique','=','add_employees.id')->join('registries','employee_id','=','registries.employee_id')
          ->select('add_employees.*','registries.typeofemployment','registries.registrytype','add_employees.name','add_employees.status','add_employees.position',
          'paysummaries.patient_name','paysummaries.rate','paysummaries.date','paysummaries.typeofvisit','paysummaries.totalrate','paysummaries.milesusd',
          'paysummaries.comments','paysummaries.totalrate','paysummaries.pid','registries.rid')->get();
        
          $registries = registry::get();
        $totalvisits=paysummary::sum('numberofvisits');
     
        
      
        return view('registry',[
            'registries'=>$registries,
            'employees'=>$employees,
            'totalvisits'=>$totalvisits,
            
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
    public function UpdateRegistry(Request $request, $rid)
    {
       //update details
    
        //  addEmployee::where('id',$employee->id)->update([
        //   'name'=>request()->name_update,
        //   'position'=>request()->position_update,
        //   'date'=>request()->date_update,
        //   'hourlyrate'=>request()->hourlyrate_update,
        //   'position'=>request()->position_update,
        //   'rate'=>request()->rate_update,
        //   'status'=>request()->$employee->status_update,
    
        //  ]);
        //update employee details
        registry::where('rid',$rid)->update([
          'typeofemployment'=>request()->typeofemployment,
          'registrytype'=>request()->registrytype,
              'status'=>request()->status,]);
       
            //   $registry = registry::find($rid);
            //   $registry->typeofemployment = $request->typeofemployment;
            //   $registry->registrytype = $request->registrytype;
            //   $registry->status=$request->status;
            //   $registry->save();
             
         return redirect()->back()->with('statusreg','Registry Updated Successfully');
       }
    
}
