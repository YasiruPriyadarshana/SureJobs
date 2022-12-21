<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Jobs;

class EmployerController extends Controller
{

    function create_job(Request $request){
        $result = Jobs::create(
            [
                'employer_id'=>1,
                'title'=>$request['title'], 
                'type'=>'type', 
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
    
}
