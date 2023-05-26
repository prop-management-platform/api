<?php

use App\Http\Controllers\API\V1\Auth\AuthenticatedSessionController;
use App\Http\Controllers\API\V1\IdentityController;
use App\Http\Controllers\API\V1\PropController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function() {
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::middleware(['auth:sanctum'])->group(function() {
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);

        Route::get('identity', IdentityController::class);
        Route::apiResource('props', PropController::class);
    });
});

