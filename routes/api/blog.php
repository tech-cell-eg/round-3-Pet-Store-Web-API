<?php

use App\Http\Controllers\API\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

Route::get('/blogs', [BlogController::class, 'index']);
