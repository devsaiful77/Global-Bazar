<?php

use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\Admin\BrandController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\GeoCodeController;
use App\Http\Controllers\Api\Admin\ProductController;
use App\Http\Controllers\Api\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

/* Public Route */
Route::controller(AdminAuthController::class)->group(function() {
    Route::post('/login','login');
});

/* protected router */
Route::middleware('auth:admin-api')->group(function () {
    Route::controller(AdminAuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me', 'current_user');
    });

    /* ========== Brand Controller Routing  ========== */
    Route::controller(BrandController::class)->group(function (){
        Route::get('brand-list','brand_list');
    });
    /* ========== Category Controller Routing  ========== */
    Route::controller(CategoryController::class)->group(function (){
        Route::get('category-list','category_list');
    });
    /* ========== Category Controller Routing  ========== */
    Route::controller(SubCategoryController::class)->group(function (){
        Route::get('subcategory-list','subcategory_list');
    });
    /* ========== Product Controller Routing  ========== */
    Route::controller(ProductController::class)->group(function (){
        Route::get('product-list','product_list');
    });
    /* ========== Geocode Controller Routing  ========== */
    Route::controller(GeoCodeController::class)->group(function (){
        Route::get('division-list','division_list');
        Route::get('district-list','district_list');
    });

});
