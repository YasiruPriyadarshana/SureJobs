<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Jobs;
use App\Models\Employee;

class EmployerController extends Controller
{

    function create_job(Request $request){
        $result = Jobs::create(
            [
                'employer_id'=>1,
                'title'=>$request['title'], 
                'type'=>$request['type'], 
                'position'=>$request['position'],
                'description'=>$request['description'], 
                'salary_range'=>$request['salary_range']
            ]);

        if($result)
        {
            return view('home');
        }

        return view('addjobs')->with('success', 'Login details are not valid');
    }

    function applied_jobs(){
        $Job = Jobs::find(1);
 
        $employees = $Job->employees;

        // add attribute from parent class/user;
        for ($i = 0; $i < count($employees); $i++) {
            $parentclass = $employees[$i]->user;
            $employees[$i]['name'] = $parentclass['name'] ;
        }
         
        return view('appliedjobs', ['employees'=>$employees]);
    }

    //logged company Offered Jobs
    function allJobs(){
        return view('mangejobs', ['jobs'=>$jobs]);
    }


    function downloadCV($cv){
        $file = Storage::disk('public')->get($cv);
  
        return (new Response($file, 200))
              ->header('Content-Type', ' application/pdf');
              
    }
    
}
