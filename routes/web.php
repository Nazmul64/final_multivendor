<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;

Auth::routes();


Route::get('/', [FrontendController::class, 'frontend'])->name('frontend');
Route::get('product/details/{slug}', [FrontendController::class, 'productdetails'])->name('productdetails');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::POST('/profilesetting', [UserController::class, 'profilesetting'])->name('profilesetting');
Route::POST('/changespassowrd', [UserController::class, 'changespassowrd'])->name('changespassowrd');
Route::POST('/changespassowrd', [UserController::class, 'changespassowrd'])->name('changespassowrd');
Route::get('/emailoffer', [UserController::class, 'emailoffer'])->name('emailoffer');
Route::get('/singleoffer/{id}', [UserController::class, 'singleoffer'])->name('singleoffer');


Route::resource('category', CategoryController::class);
Route::resource('vendor', VendorController::class);
Route::resource('product', ProductController::class);
