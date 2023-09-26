<?php

// Devo importare il Controller 
use App\Http\Controllers\Guest\MovieController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, "index"])->name('homepage');
