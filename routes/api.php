<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

Route::apiResource('users', UserController::class);
