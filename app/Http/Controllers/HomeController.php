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
            $parentclass = $employer->only('image','location');
            
            $jobs = $employer->jobs;
            // add attribute from parent class/employee;
            for ($i = 0; $i < count($jobs); $i++) {
                $jobs[$i]['image'] = 'storage/'.$parentclass['image'] ;
                $jobs[$i]['location'] = $parentclass['location'] ;
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


    function searchJobs(Request $request){
        $alljobs = $this->getAllJobs();

        $job = $request->job;
        $category = $request->category;
        $location = $request->location;

        
        // $filteredCollection = $alljobs->where('position', 'LIKE', "%$job%");  // this not work with collection

        $alljobs = $alljobs->filter(function ($item) use ($job) {
            return false !== stristr($item->position, $job);
        });

        $filteredCollection = $alljobs->filter(function ($item) use ($location) {
            return false !== stristr($item->location, $location);
        });

        return view('home', ['auth'=>1,'alljobs'=>$filteredCollection]);
    }
}
