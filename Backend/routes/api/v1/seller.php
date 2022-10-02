<?php

use App\Http\Controllers\Api\Seller\SellerAuthController;
use Illuminate\Support\Facades\Route;

/* Public Route */
Route::controller(SellerAuthController::class)->group(function() {
    Route::post('/login','login');
});

/* protected router */
Route::middleware('auth:seller-api')->group(function () {
    Route::controller(SellerAuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me', 'current_user');
    });
});
