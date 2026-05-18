<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('categories', CategoryController::class);

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'signup']);

Route::middleware('auth:Sanctum')->group(function () {

    Route::post('logout',[AuthController::class,'destroy'])->name('api.logout');

});
