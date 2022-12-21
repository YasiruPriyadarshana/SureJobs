<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', [EmployeeController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class, 'unauth']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/addjobs', function () {
    return view('addjobs');
});

Route::get('/home/{auth}',[HomeController::class, 'index']);
Route::get('/registration/{isEmployer}',[UsersController::class, 'index']);

//post

Route::post('user/{id}', [UsersController::class, 'create_user']);

Route::controller(UsersController::class)->group(function(){
    Route::post('login', 'validate_login')->name('auth.validate_login');
});


Route::controller(EmployerController::class)->group(function(){
    Route::post('', 'create_job')->name('company.create_job');
});
