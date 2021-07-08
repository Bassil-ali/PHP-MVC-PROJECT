<?php

use secheater\Http\Route;

use App\Controllers\HomeController;
use App\Controllers\Auth\RegisterController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);