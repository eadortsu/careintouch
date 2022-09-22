<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegistryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\signUpController;
use App\Http\Middleware\isAdmin;


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
Route::middleware('isAdmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::post('/dashboard', [DashboardController::class,'addEmployee'])->middleware('auth');
    Route::put('/update-employee/{id}', [DashboardController::class,'UpdateEmployee'])->middleware('auth')->name('updateemployee');
    Route::get('/registry', [RegistryController::class, 'getRegistry'])->name('registry');
    Route::post('/registry', [RegistryController::class, 'saveRegistry'])->name('saveRegistry');
    Route::post('/paysummary', [RegistryController::class, 'paysummary'])->name('paysummary')->middleware('auth');
});



Route::post('/logout', [LogoutController::class,'signoff'])->name('logout');

Route::get('/signup', [signUpController::class,'index'])->name('signup');
Route::post('/signup', [signUpController::class,'save']); 

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'save']);


Route::get('/employee', [EmployeeController::class,'index'])->name('employee')->middleware('auth');
Route::post('/employee', [EmployeeController::class,'paysummary'])->name('employee')->middleware('auth');
//Route::get('/employee', function(){return view('employeeAccount');})->name('employee');

Route::get('/resetpassword', function () {
    return view('auth.passwordreset');
})->name('resetpassword');

Route::get('/registry', [RegistryController::class,'getRegistry'])->name('registry');


Route::get('/', [LoginController::class,'index'])->name('login');
Route::post('/', [LoginController::class,'save'])->name('login');
