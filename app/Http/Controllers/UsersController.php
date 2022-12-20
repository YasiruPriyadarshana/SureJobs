<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;
use DB;

class UsersController extends Controller
{
    function index($id){   
        return view('registration', ['id'=>$id]);
    }

    function validate_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $result = DB::table('users')->select('name')->where(['email' => $credentials['email'], 'password' => $credentials['password']])->first();

        if($result)
        {
            return view('home');
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
        dd($id);
        
    }

    function create_employee(Request $request){
        $user = User::create(['role'=>'employee', 'name'=>$request['name'], 'email'=>$request['email'], 'password'=>$request['password']]);

        if($user){
            $result = Employee::create(['user_id'=>$user['id'], 'mobile'=>$request['mobile'], 'address'=>$request['address'], 'nic'=>$request['nic'], 'cv'=>$request['file']]);
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
            $result = Employer::create(['user_id'=>$user['id'], 'description'=>$request['description'], 'location'=>$request['location'] ]);
        }
        if($result)
        {
            return view('login');
        }

        return view('registration')->with('success', 'Login details are not valid');
    }
}
