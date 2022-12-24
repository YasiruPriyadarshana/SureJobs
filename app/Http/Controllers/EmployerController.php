<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

use App\Models\User;
use App\Models\Jobs;
use App\Models\Employee;
use App\Models\Employer;

class EmployerController extends Controller
{
    function index($userid){
        return view('addjobs', ['userid'=>$userid]);
    }

    function create_job(Request $request){
        $result = Jobs::create(
            [
                'employer_id'=>$request['userid'],
                'title'=>$request['title'], 
                'type'=>$request['type'], 
                'position'=>$request['position'],
                'description'=>$request['description'], 
                'salary_range'=>$request['salary_range']
            ]);

        if($result)
        {
            return redirect()->back()->with('message', 'new job added!');
        }

        return ;
    }

    function applied_jobs($id){
        // $job = Jobs::find($id);

        // $company = $job->employer;
        $company = Employer::find($id);

        $jobs = $company->jobs;
        
        //to get company name
        $user = $company->user;
        $company['name'] = $user->name;
 
        $allemployees = new Collection();
        foreach ($jobs as $job) {
            $employees = $job->employees;
            // add attribute from parent class/user;
            for ($i = 0; $i < count($employees); $i++) {
                $parentclass = $employees[$i]->user;
                $employees[$i]['name'] = $parentclass['name'] ;
                $employees[$i]['job'] = $job;
            }
            $allemployees = $allemployees->merge($employees);
        }
        
        
        
        return view('appliedjobs', ['employees'=>$allemployees,'company'=>$company]);
    }


    //authenticated company offered Jobs
    function mangeJobs($id){
        $company = Employer::find($id);
        $jobs = $company->jobs;
        
        //to get company name
        $user = $company->user;
        $company['name'] = $user->name;
         
        return view('mangejobs', ['jobs'=>$jobs,'company'=>$company, 'userid'=>$id]);
    }

    function editJobs($id,$userid){
        //only for build addjobspage view with data
        
        $job = Jobs::find($id);
        // dd($job);
         
        return view('addjobs', ['userid'=>$userid,'job'=>$job]);
    }

    function editJobSubmit(Request $request){
        // dd($request);
        $job = Jobs::find($request['id']);
        // Getting values from the blade template form
        $job->employer_id =  $request->get('userid');
        $job->title = $request->get('title');
        $job->type = $request->get('type');
        $job->position =  $request->get('position');
        $job->description = $request->get('description');
        $job->salary_range = $request->get('salary_range');
        
        $job->save();
        
       
            return redirect()->back()->with('message', 'new job added!');
       
    }

    function deleteJobs($id,$userid){
        
        $company = Employer::find($userid);
        $jobs = $company->jobs;

        Jobs::find($id)->delete();
        //to get company name
        $user = $company->user;
        $company['name'] = $user->name;
         
        return view('mangejobs', ['jobs'=>$jobs,'company'=>$company, 'userid'=>$userid]);
    }


    function downloadCV($cv){
        $file = Storage::disk('public')->get($cv);
  
        return (new Response($file, 200))
              ->header('Content-Type', ' application/pdf');
              
    }
    
}
