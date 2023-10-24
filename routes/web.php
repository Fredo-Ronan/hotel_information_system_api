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
            ]
        ],
        'facilities' => [
            [
                'image_path' => 'images/facilities_icons/workspace icon.png',
                'facility_name' => 'Private Workspace'
            ],
            [
                'image_path' => 'images/facilities_icons/parking icon.png',
                'facility_name' => 'Parking Area'
            ],
            [
                'image_path' => 'images/facilities_icons/breakfast icon.png',
                'facility_name' => 'Breakfast'
            ],
            [
                'image_path' => 'images/facilities_icons/wifi icon.png',
                'facility_name' => 'Free Wifi'
            ],
            [
                'image_path' => 'images/facilities_icons/electricity.png',
                'facility_name' => 'Free Electricy'
            ],
            [
                'image_path' => 'images/facilities_icons/swimming pool icon.png',
                'facility_name' => 'Swimming Pool'
            ],
            [
                'image_path' => 'images/facilities_icons/gyms icon.png',
                'facility_name' => 'Exercise Space'
            ],
            [
                'image_path' => 'images/facilities_icons/other service icon.png',
                'facility_name' => 'Other Services'
            ]
        ]
    ]);
});

Route::get('/rooms', function () {
    return view('roomspage/rooms', [
        'rooms'=> [
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
            ],
            [
                'room_name'=> 'Luxury Room',
                'price'=> 120,
                'stars'=> '5',
                'picture'=> 'images/room-4.jpg',
            ],
            [
                'room_name'=> 'Superior Room',
                'price' => 120,
                'stars' => '5',
                'picture' => 'images/room-5.jpg',
            ]
        ]
    ]);
});


Route::get('/login', function () {
    return view('loginpage/login');
});

Route::get('/signup', function () {
    return view('registerpage/register');
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

// Route detail per kamar hotelnyaa
Route::get('/King Room', function () {
    return view('roomspage/king-room');
});

Route::get('/Suite Room', function () {
    return view('roomspage/suite-room');
});

Route::get('/Family Room', function () {
    return view('roomspage/family-room');
});

Route::get('/Deluxe Room', function () {
    return view('roomspage/deluxe-room');
});

Route::get('/Luxury Room', function () {
    return view('roomspage/luxury-room');
});

Route::get('/Superior Room', function () {
    return view('roomspage/superior-room');
});
// Route::get('/room-detail/{name}', function () {
//     return view('roompage/rooms-single');
// });
