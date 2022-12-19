<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function index(){

        $user = User::with('getEmployeeRelation')->get();
        dd($user);
        return view('welcome');
    }

   
}
