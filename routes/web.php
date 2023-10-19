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
    return view('homepage/homepage', [
        'highlighted_rooms' => [
            [
                'room_name'=> 'King Room',
                'price'=> 120,
                'stars'=> '5',
                'picture' => 'images/room-6.jpg',
            ],
            [
                'room_name'=> 'Suite Room',
                'price'=> 120,
                'stars'=> '5',
                'picture' => 'images/room-1.jpg',
            ],
            [
                'room_name'=> 'Family Room',
                'price'=> 120,
                'stars'=> '5',
                'picture' => 'images/room-2.jpg',
            ],
            [
                'room_name'=> 'Deluxe Room',
                'price'=> 120,
                'stars'=> '5',
                'picture' => 'images/room-3.jpg',
            ]
        ],
        'instagram_pictures' => [
            [
                'insta_picture'=> 'images/insta-1.jpg',
            ],
            [
                'insta_picture'=> 'images/insta-2.jpg',
            ],
            [
                'insta_picture'=> 'images/insta-3.jpg',
            ],
            [
                'insta_picture'=> 'images/insta-4.jpg',
            ],
            [
                'insta_picture'=> 'images/insta-5.jpg',
            ],
        ]
    ]);
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

Route::get('/room_detail', function () {
    return view('roomspage/rooms-single');
});

// Route::get('/room-detail/{name}', function () {
//     return view('roompage/rooms-single');
// });
