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
        Route::get( '/', [ HomePageController::class, 'index' ] )->name( 'homepage' );
    });