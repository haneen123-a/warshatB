<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']); // client
Route::post('/login', [AuthController::class, 'login']);       // all
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

