<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']); // client
Route::post('/login', [AuthController::class, 'login']);       // all

Route::middleware(['auth:sanctum'])->group(function () {
    //client logout
    Route::post('/logout', [AuthController::class, 'logout']);
    //display sections
    Route::get('/sections', [SectionController::class, 'index']);
    //display specific section with its services
    Route::get('/sections/{section}', [SectionController::class, 'show']);
});
