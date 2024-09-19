<?php

use App\Http\Controllers\ {
    ProductController,
    OrdersController,
    CustomersController,
    CategoryController,
    BrandController,
    SellersController,
    HomePageController,
    DashboardController
};
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontForgotPasswordController;
use App\Http\Controllers\FrontLoginController;
use App\Http\Controllers\FrontRegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the 'web' middleware group. Now create something great!
    |
    */

    Route::group( [ 'prefix'=>'admin' ], function() {
        Auth::routes();
        Route::resource( 'product', ProductController::class );
        Route::resource( 'category', CategoryController::class );
        Route::resource( 'brand', BrandController::class );
        Route::resource( 'orders', OrdersController::class );
        Route::resource( 'customers', CustomersController::class );
        Route::resource( 'seller', SellersController::class );
        Route::get( '/dashboard', [ DashboardController::class, 'index' ] )->name( 'dashboard.index' );
    });
    
    Route::group( [  ], function() {
        Route::post('/registration',[FrontRegisterController::class,'registerHandle'])->name('front.registerhandle');
        Route::get('/register',[FrontRegisterController::class,'register'])->name('front.register');
        Route::get('/forgot/password',[FrontForgotPasswordController::class,'forgotPasswordByEmail'])->name('front.forgot.password');
        Route::post('/handle/',[FrontLoginController::class,'loginHandle'])->name('front.loginHandle');
        Route::get('/login',[FrontLoginController::class,'frontLogin'])->name('front.login');
        Route::get( '/', [ HomePageController::class, 'index' ] )->name( 'homepage' );
    });