<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Models\Employer;

class HomeController extends Controller
{
    function index($auth){   
        return view('home', ['auth'=>$auth]);
    }

    //for unauthorized users
    function unauth(){ 
        $alljobs = new Collection();
        $employers = Employer::all();

        foreach ($employers as $employer) {
            $filterd = $employer->only('image');
            
            $jobs = $employer->jobs;
            // add attribute from parent class;
            for ($i = 0; $i < count($jobs); $i++) {
                $jobs[$i]['image'] = 'storage/'.$filterd['image'] ;
            }

            $alljobs = $alljobs->merge($jobs);
        }

        return view('home', ['auth'=>1,'alljobs'=>$alljobs]);
    }
}
