<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Models\Employer;
use App\Models\Employee;
use App\Models\Jobs;

class HomeController extends Controller
{
    public function detailjob(Jobs $job){
        //route model binding
        return view('detail', ['job'=>$job]);
    }

    function index($auth){  
        $alljobs = $this->getAllJobs(); 
        
        return view('home', ['auth'=>$auth,'alljobs'=>$alljobs]);
    }

    //for unauthorized users
    function unauth(){ 
        $alljobs = $this->getAllJobs();

        return view('home', ['auth'=>1,'alljobs'=>$alljobs]);
    }

    function getAllJobs(){
        $alljobs = new Collection();
        $employers = Employer::all();

        foreach ($employers as $employer) {
            $parentclass = $employer->only('image');
            
            $jobs = $employer->jobs;
            // add attribute from parent class/employee;
            for ($i = 0; $i < count($jobs); $i++) {
                $jobs[$i]['image'] = 'storage/'.$parentclass['image'] ;
            }

            $alljobs = $alljobs->merge($jobs);
        }

        return $alljobs;
    }

    function applyForJob(){
        $jobId = 1;	
        $employee = Employee::find(1);	
       

        $employee->jobs()->attach($jobId);
        return view('home');
    }


    function searchJobs(){
        $alljobs = new Collection();
        $employers = Employer::all();

        $filteredCollection = $alljobs->where('location', '=', 'Colombo');

        return view('home', ['auth'=>$auth,'alljobs'=>$filteredCollection]);
    }
}
