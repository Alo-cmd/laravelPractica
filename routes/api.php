<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ComputadoraController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', UserController::class);

Route::apiResource('computadora', ComputadoraController::class);

