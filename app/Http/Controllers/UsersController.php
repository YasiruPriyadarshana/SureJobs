<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;


class UsersController extends Controller
{ 
    function index($id){   
        return view('registration', ['id'=>$id]);
    }

    function validate_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $result = DB::table('users')->select('role', 'id')->where(['email' => $credentials['email'], 'password' => $credentials['password']])->first();
      
        //get logged users type
        if($result)
        {
            if($result->role == "company"){
                $userid = DB::table('employers')->select('id')->where('user_id', '=', $result->id)->first();
                return view('home', ['auth' => 'company']);
            }else{
                $userid = DB::table('employees')->select('id')->where('user_id', '=', $result->id)->first();
                return view('home', ['auth' => 'employee']);
            }
            
        }

        return view('login')->with('success', 'Login details are not valid');
    }

    function create_user($id,Request $request)
    {
        if($id == "user"){
            return $this->create_employee($request);
        }else{
            return $this->create_employer($request);
        }
        
    }

    function create_employee(Request $request){
        $user = User::create(['role'=>'employee', 'name'=>$request['name'], 'email'=>$request['email'], 'password'=>$request['password']]);

        if($user){
            $name = $request['file']->getClientOriginalName();
            $result = Employee::create(['user_id'=>$user['id'], 'mobile'=>$request['mobile'], 'address'=>$request['address'], 'nic'=>$request['nic'], 'cv'=>$name]);
            // save file locally
            if($request['file']){
                Storage::disk('public')->put($name, file_get_contents($request['file'] -> getRealPath()) );
            }
        
        }
     

        if($result)
        {
            return view('login');
        }

        return view('registration')->with('success', 'Login details are not valid');
    }

    function create_employer(Request $request){
        $user = User::create(['role'=>'company', 'name'=>$request['name'], 'email'=>$request['email'], 'password'=>$request['password'] ]);

        if($user){
            $name = $request['file']->getClientOriginalName();
            $result = Employer::create(['user_id'=>$user['id'], 'description'=>$request['description'], 'location'=>$request['location'], 'image'=>$name ]);
            // save file locally
            if($request['file']){
                Storage::disk('public')->put($name, file_get_contents($request['file'] -> getRealPath()) );
            }

        }
        if($result)
        {
            return view('login');
        }

        return view('registration')->with('success', 'Login details are not valid');
    }
}
