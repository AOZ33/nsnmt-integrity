<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/google', [GoogleController::class,'login']);
Route::get('login/google/callback', [GoogleController::class,'callback']);

Route::middleware(['auth'])->group(function(){
    Route::get('logout',[GoogleController::class,'logout']);
    Route::get('user',[UserController::class,'index']);
});

