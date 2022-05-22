<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultanController;
use App\Http\Controllers\RegisterVaksinController;
use App\Http\Controllers\SpotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/v1/auth/login',[AuthController::class,'index']);
Route::post('/v1/auth/logout/{token}',[AuthController::class,'logout'])->middleware('authusers');
Route::post('/v1/consultations/{token}',[ConsultanController::class,'index'])->middleware('authusers');
Route::get('/v1/consultations/{token}',[ConsultanController::class,'getdata'])->middleware('authusers');
Route::get('/v1/spot/{token}',[SpotController::class,'index'])->middleware('authvaksin');
Route::get('/v1/spot/{token}/{id}',[SpotController::class,'detail'])->middleware('authvaksin');
Route::post('/v1/vaccinations/{token}',[RegisterVaksinController::class,'index'])->middleware('authvaksin');
Route::get('/v1/vaccinations/{token}',[RegisterVaksinController::class,'getdata'])->middleware('authvaksin');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
