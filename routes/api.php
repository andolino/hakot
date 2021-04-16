<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// use App\Http\Controllers\TodoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/todo', 'App\Http\Controllers\TodoController');
Route::post('/register/contractors', [RegisterController::class,'createContractors']);
Route::post('/register/truckers', [RegisterController::class,'createTruckers']);

Route::post('/login/contractors', [LoginController::class,'contractorsLogin'])->name('login-contractors');
Route::post('/login/truckers', [LoginController::class,'truckersLogin'])->name('login-truckers');
// Route::get('/todo', [TodoController::class, 'index']);
