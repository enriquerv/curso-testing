<?php

use Illuminate\Http\Request;
use Api\V1\ProductController;
use Api\V1\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::put('products/{id}', [ProductController::class, 'update']);
// Route::patch('products/{id}', [ProductController::class, 'patch']);
Route::apiResource('v1/products', ProductController::class);
Route::apiResource('v1/users', UserController::class);




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
