<?php

use App\Http\Controllers\Api\Admin\BrandController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\GeoCodeController;
use App\Http\Controllers\Api\Admin\ProductController;
use App\Http\Controllers\Api\Admin\SubCategoryController;
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

Route::prefix('v1')->group(function() {
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


