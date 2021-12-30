<?php

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

Route::get('/', [App\Http\Controllers\MyController::Class,'get_index_page']) -> name('get_index_page');

Route::get('/create',[\App\Http\Controllers\MyController::class,'get_create_page'])->name('get_create_page');
Route::post('/create',[\App\Http\Controllers\MyController::class,'store_create_item'])->name('store_create_item');

Route::get('/signup',[\App\Http\Controllers\MyController::class,'get_signup_page'])->name('get_signup_page');
Route::post('/signup',[\App\Http\Controllers\MyController::class,'store_signup_user'])->name('store_signup_user');

Route::get('/signin',[\App\Http\Controllers\MyController::class,'get_signin_page'])->name('get_signin_page');
Route::post('/signin',[\App\Http\Controllers\MyController::class,'signin_go'])->name('signin_go');
