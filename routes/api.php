<?php

use App\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/test', [TestController::class, 'index']);
