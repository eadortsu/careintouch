<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\registry;

use App\Models\User;


class RegistryController extends Controller
{
   
  
   //get all registry
    public function getRegistry(Request $request)
    {
        $registry = registry::where('user_id',auth()->user()->id)->get();
        return view('registry',[
            'registry'=>$registry,
        ]);
    }

    
  
}
