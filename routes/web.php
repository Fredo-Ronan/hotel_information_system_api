<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage/homepage');
});

Route::get('/rooms', function () {
    return view('roomspage/rooms');
});

Route::get('/contact', function () {
    return view('contactpage/contact');
});

Route::get('/blog', function () {
    return view('/blogpage/blog');
});

Route::get('/restaurant', function () {
    return view('restaurantpage/restaurant');
});

Route::get('/about', function () {
    return view('aboutpage/about');
});
