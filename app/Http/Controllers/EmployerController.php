<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployerController extends Controller
{
    function index(){
        return User::find(1);
    }
}
