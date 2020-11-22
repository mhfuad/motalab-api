<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandSelectorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('brand' , BrandController::class )->middleware('cors');

Route::middleware('cors')->group(function(){
    Route::resource('brand',BrandController::class);
    Route::resource('brand_selector',BrandSelectorController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('unit',UnitController::class);
});