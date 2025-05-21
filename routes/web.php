<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PodcastController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login/validate', [LoginController::class, 'loginValidation'])->name('login.validation');


Route::resource('/podcast', PodcastController::class);