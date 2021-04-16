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

Route::get('/contractors-dashboard', function () {
    return view('contractors-dashboard');
});


Auth::routes();


Route::get('/login/contractors', [LoginController::class, 'showContractorsLoginForm']);
Route::get('/login/truckers', [LoginController::class,'showTruckersLoginForm']);
Route::get('/register/contractors', [RegisterController::class, 'showContractorsRegisterForm']);
Route::get('/register/truckers', [RegisterController::class,'showTruckersRegisterForm']);

Route::post('/login/contractors', [LoginController::class,'contractorsLogin']);
Route::post('/login/truckers', [LoginController::class,'truckersLogin']);
Route::post('/register/contractors', [RegisterController::class,'createContractors']);
Route::post('/register/truckers', [RegisterController::class,'createTruckers']);

Route::group(['middleware' => 'auth:contractors'], function () {
    // Route::view('/contractors', 'contractors');
    Route::get('/contractors', [HomeController::class, 'contractorsDashboard']);
});

Route::group(['middleware' => 'auth:truckers'], function () {
    // Route::view('/truckers', 'truckers');
    Route::get('/truckers', [HomeController::class, 'truckersDashboard']);
});

Route::get('logout', [LoginController::class,'logout']);