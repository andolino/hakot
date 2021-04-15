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
Route::post('/register/contractor', [RegisterController::class,'createContractor']);
Route::post('/register/trucker', [RegisterController::class,'createTrucker']);

Route::post('/login/contractor', [LoginController::class,'contractorLogin'])->name('login-contractor');
Route::post('/login/trucker', [LoginController::class,'truckerLogin'])->name('login-trucker');
// Route::get('/todo', [TodoController::class, 'index']);
