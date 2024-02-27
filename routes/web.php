<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/kategori/babykid',[ProductController::class,'babykid']);
Route::get('/kategori/beautyhealth',[ProductController::class,'beautyhealth']);
Route::get('/kategori/foodbeverage',[ProductController::class,'foodbeverage']);
Route::get('/kategori/homecare',[ProductController::class,'homecare']);

Route::get('/user/{id}/name/{name}',[UserController::class,'user']);

Route::get('/sale',[SaleController::class,'sale']);