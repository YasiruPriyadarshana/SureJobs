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
        $employer = $job->employer;
        $job['location'] = $employer->location;
        //route model binding
        return view('detail', ['job'=>$job]);
    }

    function index(Request $auth){
        $alljobs = $this->getAllJobs(); 
        return view('home', ['auth'=>$auth['auth'], 'userid' => $auth['userid'],'alljobs'=>$alljobs]);
    }

    //for unauthorized users
    function unauth(){ 
        $alljobs = $this->getAllJobs();
        $auth = ["auth" => "uo", "userid" => 1];

        return view('home', ['auth'=>$auth,'alljobs'=>$alljobs]);
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

    function applyForJob(Request $request){
        $jobId = $request['job'];	
        $employee = Employee::find($request['userid']);	
       

        $employee->jobs()->attach($jobId);

        return redirect()->route('home', ['auth' => $request['auth'],'userid' => $request['userid']]);
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
