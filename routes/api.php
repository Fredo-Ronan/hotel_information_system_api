<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kamar', [App\Http\Controllers\Api\KamarController::class,'index'])->name('index');
Route::post('register', [App\Http\Controllers\Api\RegisterController::class,'register'])->name('register');
Route::get('register/verify/{verify_key}', [App\Http\Controllers\Api\RegisterController::class, 'verify'])->name('verify');
Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\Api\LoginController::class,'logout'])->name('logout');
