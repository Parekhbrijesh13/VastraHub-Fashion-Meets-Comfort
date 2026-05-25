<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\CategoryController as ApiCategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// User Side Routes


//Dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->name('user.home');
Route::get('login',[AuthController::class, 'Show_login'])->name('login');
Route::get('register',[AuthController::class, 'Show_register'])->name('register');


/* 2. Admin Side Routes */


// Admin Dashboard

Route::get('admin/dashboard', [AdminDashboardController ::class, 'index'])->name('admin.dashboard');

Route::get('admin/category',[CategoryController::class,'index'])->name('admin.category.index');
Route::get('admin/product',[ProductController::class,'index'])->name('admin.product.index');


