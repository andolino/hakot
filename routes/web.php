<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contractor-dashboard', function () {
    return view('contractor-dashboard');
});


Auth::routes();


Route::get('/login/contractor', [LoginController::class, 'showContractorLoginForm']);
Route::get('/login/trucker', [LoginController::class,'showTruckerLoginForm']);
Route::get('/register/contractor', [RegisterController::class, 'showContractorRegisterForm']);
Route::get('/register/trucker', [RegisterController::class,'showTruckerRegisterForm']);

Route::post('/login/teachers', [LoginController::class,'contractorLogin']);
Route::post('/login/students', [LoginController::class,'truckerLogin']);
Route::post('/register/teachers', [RegisterController::class,'createContractor']);
Route::post('/register/students', [RegisterController::class,'createTrucker']);

Route::group(['middleware' => 'auth:contractor'], function () {
    // Route::view('/contractor', 'contractor');
    Route::get('/contractor', [HomeController::class, 'contractorDashboard']);
});

Route::group(['middleware' => 'auth:trucker'], function () {
    // Route::view('/trucker', 'trucker');
    Route::get('/trucker', [HomeController::class, 'truckerDashboard']);
});

Route::get('logout', [LoginController::class,'logout']);