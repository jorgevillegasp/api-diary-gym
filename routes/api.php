<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\UserController as UserV1;
use App\Http\Controllers\Api\V1\RolController as RolV1;
use App\Http\Controllers\Api\V2\UserController as UserV2;
use App\Http\Controllers\Api\LoginController;

//V1
Route::apiResource('v1/users', UserV1::class)
    ->only(['index','show','destroy'])
    ->Middleware('auth:sanctum');


//v2
Route::apiResource('v2/users', UserV2::class)
    ->only(['index','show','destroy'])
    ->Middleware('auth:sanctum');

Route::post('login', [ LoginController::class, 'login' ]);


Route::apiResource('v1/rol',RolV1::class)
->only(['index']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


