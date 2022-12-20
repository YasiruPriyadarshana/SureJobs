<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/registration/{isEmployer}',[UsersController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::controller(UsersController::class)->group(function(){
    Route::post('', 'validate_login')->name('auth.validate_login');
});

Route::post('user/{id}', [UsersController::class, 'create_user']);