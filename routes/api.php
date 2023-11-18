<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login',[LoginController::class,'login']);
Route::post('profile',[ProfileController::class,'create']);
Route::post('profile_update/{id}',[ProfileController::class,'profile_update']);
Route::post('check_in/{id}',[ProfileController::class,'check_in']);
Route::post('check_out/{id}',[ProfileController::class,'check_out']);

