<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login/validate', [LoginController::class, 'loginValidation'])->name('login.validation');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/podcast', [PodcastController::class, 'index'])->name('podcast.index');
    Route::get('/buscador', [MusicController::class, 'index'])->name('buscador.index');
    Route::get('/buscar-cancion', [MusicController::class, 'buscador'])->name('buscador');
});

