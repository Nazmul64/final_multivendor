<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::POST('/profilesetting', [UserController::class, 'profilesetting'])->name('profilesetting');
Route::POST('/changespassowrd', [UserController::class, 'changespassowrd'])->name('changespassowrd');
