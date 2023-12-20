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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Autentikasi Route
Route::post('register', [App\Http\Controllers\Api\RegisterController::class,'register'])->name('register');
Route::get('register/verify/{verify_key}', [App\Http\Controllers\Api\RegisterController::class, 'verify'])->name('verify');
Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\Api\LoginController::class,'logout'])->name('logout');

// Route Admin Kelola Kamar
Route::get('/room', [App\Http\Controllers\Api\KamarController::class, 'index'])->name('index');
Route::post('/room', [App\Http\Controllers\Api\KamarController::class , 'store'])->name('store');
Route::post('/room/{id}', [App\Http\Controllers\Api\KamarController::class, 'update'])->name('update');
Route::delete('/room/{id}', [App\Http\Controllers\Api\KamarController::class, 'destroy'])->name('destroy');

// Route Admin Kelola User
Route::get('/user', [App\Http\Controllers\Api\UserController::class, 'index'])->name('index');
Route::delete('/user/{id}', [App\Http\Controllers\Api\UserController::class, 'destroy'])->name('destroy');

//Route Admin Kelola Booking
Route::get('/booking', [App\Http\Controllers\Api\BookingController::class, 'index'])->name('index');
Route::delete('/booking/{id}', [App\Http\Controllers\Api\BookingController::class, 'destroy'])->name('destroy');

Route::middleware('auth:api')->group(function() {
    Route::post("/updateProfileData/{id}", [App\Http\Controllers\Api\UserController::class, "updateDataProfil"])->name("updateDataProfil");
    Route::post("/updateProfilePhoto/{id}", [App\Http\Controllers\Api\UserController::class, "updateFotoProfil"])->name("updateFotoProfil");
    Route::get("/getUserData/{id}", [App\Http\Controllers\Api\UserController::class, "show"])->name("show");

    Route::get('kamar', [App\Http\Controllers\Api\KamarController::class, 'index'])->name('index');

    Route::post("/booking", [App\Http\Controllers\Api\BookingController::class, "store"])->name("store");
    Route::get("/mybooking/{id}", [App\Http\Controllers\Api\BookingController::class, "show"])->name("show");
});
