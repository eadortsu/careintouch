<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\signUpController;


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
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::post('/dashboard', [DashboardController::class,'addEmployee'])->middleware('auth');


Route::post('/logout', [LogoutController::class,'signoff'])->name('logout');

Route::get('/signup', [signUpController::class,'index'])->name('signup');
Route::post('/signup', [signUpController::class,'save']); 

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'save']);



Route::get('/employee', function(){return view('employeeAccount');})->name('employee');


Route::get('/', function () {
    return view('auth.index');
})->name('index');
