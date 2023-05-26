<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php'; // Auth routes

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
