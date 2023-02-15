<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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
Route::get('/',[MainController::class,'index'])->name('home');

Route::middleware('guest')->group(function(){
    Route::get('/register',[AuthController::class,'registerShow'])->name('registerShow');
    Route::post('/register_process',[AuthController::class,'register'])->name('register_process');
    Route::get('/login',[AuthController::class,'loginShow'])->name('loginShow');
    Route::post('/login_process',[AuthController::class,'login'])->name('login_process');
});
