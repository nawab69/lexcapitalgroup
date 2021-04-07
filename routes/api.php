<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users Details
Route::get('users',[\App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('users/{id}',[\App\Http\Controllers\Admin\UserController::class, 'show']);
Route::post('users/{id}/ban',[\App\Http\Controllers\Admin\UserController::class, 'banUser']);

// Escrow and Wallet details

Route::get('escrows',[\App\Http\Controllers\Admin\EscrowController::class,'index']);
