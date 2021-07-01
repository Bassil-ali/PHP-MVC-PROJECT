<?php

use secheater\Http\Route;

use App\Controller\HomeController;

Route::get('/', [HomeController::class, 'index']);