<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PetController;

Route::prefix('pets')->group(function () {
    Route::get('/', [PetController::class, 'index']);
    Route::get('/{id}', [PetController::class, 'show']);
    Route::get('/category/{categoryId}', [PetController::class, 'getByCategory']);
});