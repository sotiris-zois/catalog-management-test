<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('products/update', [ProductController::class,'store'])->name('productUpdate');
Route::get('products', [ProductController::class,'index'])->name('productsList');
Route::get('get-all-tags',[TagController::class,'index'])->name('getTags');
Route::post('products/create', [ProductController::class,'saveProduct'])->name('createProduct');
