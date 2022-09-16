<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\addEmployee;

use App\models\registry;

use App\Models\User;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    //get all employees belonging to the logged in user
    public function index(Request $request)
    {
        $employees=addEmployee::paginate(10);
       // $employees = addEmployee::where('user_id',auth()->user()->id)->get();
        return view('admin',[
            'employees'=>$employees,
        
        ]);
    }
    
    public function addEmployee(Request $request)
    {

        $this->validate($request, [
            'name'=>'required|max:255',
            'position'=>'required|max:100',
            'date'=>'required|max:20',
            'hourlyrate'=>'required|max:100',
            'rate'=>'required|max:100',
            'status'=>'required|max:100',
            'email'=>'required|email|max:100',
            
       ]);

       //check if user already exists
       if(User::where('email',$request->email)->exists()||addEmployee::where('email',$request->email)->exists())
       {
           return back()->with('status2','Email already exists');
       }

     
    
           //save details
          if( addEmployee::create([
            'user_id'=>auth()->id(),
            'name'=>$request->name,
            'position'=>$request->position,
            'date'=>$request->date,
            'hourlyrate'=>$request->hourlyrate,
            'position'=>$request->position,
            'rate'=>$request->rate,
            'status'=>$request->status,
            'email'=>$request->email,
    
           ]))
           {

            $randomString = Str::random(20);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($randomString),
                'role'=>'employee',        
               ]); 
               

               Registry::create([
                'user_id'=>auth()->id(),
                'employee_id'=>addEmployee::where('name',$request->name)->value('id'),
                'typeofemployment'=>'longterm',
                'registrytype'=>'RN',
                'status'=>'active',
               ]);

             
        
        return back()->with('status',"Employee Added successfully $randomString");

           }
              else
              {
                return back()->with('status','Employee not Added');
              }

        //get employee details
       
      
        //save employee details

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


                   

    }
  
   
    public function UpdateEmployee(Request $request, $id)
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
        
        $employee = addEmployee::find($id);
        $employee->name = $request->name_update;
        $employee->position = $request->position_update;
        $employee->date = $request->date_update;
        $employee->hourlyrate = $request->hourlyrate_update;
        $employee->rate = $request->rate_update;
        $employee->status = $request->status_update;
        $employee->save();
       
     
         return redirect()->back()->with('status','employee Updated Successfully');
       }
    
}
