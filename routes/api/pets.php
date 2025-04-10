<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PetController;

Route::prefix('pets')->group(function () {
    Route::get('/', [PetController::class, 'index']);
    Route::get('/{pet}', [PetController::class, 'show']);
    Route::get('/category/{category}', [PetController::class, 'getByCategory']);
});