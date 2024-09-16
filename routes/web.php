<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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



Route::group(['prefix'=>'admin'],function(){
    Auth::routes();
    Route::resource('product',ProductController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('brand',BrandController::class);
    Route::resource('orders',OrdersController::class);
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});