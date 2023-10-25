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

Route::get('/roomsLoggedIn', function () {
    return view('roomspage/roomsLoggedIn', [
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

Route::get('/loggedIn', function () {
    return view('homepage/homepageLoggedIn', [
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

Route::get('/login', function () {
    return view('loginpage/login');
});

Route::get('/signup', function () {
    return view('registerpage/register');
});

Route::get('/contact', function () {
    return view('contactpage/contact');
});

Route::get('/contactLoggedIn', function () {
    return view('contactpage/contactLoggedIn');
});

Route::get('/blog', function () {
    return view('/blogpage/blog');
});

Route::get('/blogLoggedIn', function () {
    return view('/blogpage/blogLoggedIn');
});

Route::get('/room_detail', function () {
    return view('roomspage/rooms-single');
});

Route::get('/room_detail_not_loggedIn', function () {
    return view('roomspage/rooms-single-notLoggedIn');
});

Route::get('/bookingpage/checkout', function () {
    return view('bookingpage/checkout');
});
Route::get('/pembayaran/detail', function () {
    return view('pembayaran/detail');
});

// ADMIN ROUTE ======================================================================================================
Route::get('/admin', function() {
    return view('adminpage/adminpage', [
        'list_rooms' => [
            [
                'room_name'=> 'King Room',
                'desc' => 'Ruangan Hotel bak Raja',
                'available' => 10,
                'status' => 'Aktif',
                'price'=> 120,
            ],
            [
                'room_name'=> 'Suite Room',
                'desc' => 'Rasakan kenyamanan ruangan ini',
                'available' => 20,
                'status' => 'Aktif',
                'price'=> 120,
            ],
            [
                'room_name'=> 'Family Room',
                'desc' => 'Nikmati menginap anda bersama keluarga',
                'available' => 15,
                'status' => 'Aktif',
                'price'=> 120,
            ],
            [
                'room_name'=> 'Deluxe Room',
                'desc' => 'Ruangan Hotel Eksklusif',
                'available' => 5,
                'status' => 'Aktif',
                'price'=> 120,
            ],
            [
                'room_name'=> 'Luxury Room',
                'desc' => 'Rasakan kemewahannya',
                'available' => 12,
                'status' => 'Aktif',
                'price'=> 120,
            ],
            [
                'room_name'=> 'Superior Room',
                'desc' => 'Ruangan Hotel yang sangat ekslusif',
                'available' => 2,
                'status' => 'Aktif',
                'price' => 120,
            ]
        ]
    ]);
});

Route::get('/editroom', function () {
    return view('adminpage/editroom');
});

Route::get('/addroom', function () {
    return view('adminpage/addroom');
});

Route::get('/userdata', function () {
    return view('adminpage/userdata', [
        'list_user' => [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@gmail.com',
                'alamat' => 'Jl. Kesana aja, No 7',
                'no_telp' => '083764736478'
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'janesmith@gmail.com',
                'alamat' => 'Jl. Ke Sini, No 12',
                'no_telp' => '081234567890'
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michaeljohnson@gmail.com',
                'alamat' => 'Jl. Kemari, No 5',
                'no_telp' => '087654321098'
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Brown',
                'email' => 'alicebrown@gmail.com',
                'alamat' => 'Jl. Ke Mana Saja, No 20',
                'no_telp' => '089876543210'
            ],
            [
                'first_name' => 'Sarah',
                'last_name' => 'Johnson',
                'email' => 'sarahjohnson@gmail.com',
                'alamat' => 'Jl. Maju Terus, No 9',
                'no_telp' => '081111223344'
            ],
            [
                'first_name' => 'Robert',
                'last_name' => 'Wilson',
                'email' => 'robertwilson@gmail.com',
                'alamat' => 'Jl. Terdekat, No 3',
                'no_telp' => '085555667788'
            ],
            [
                'first_name' => 'Linda',
                'last_name' => 'Martinez',
                'email' => 'lindamartinez@gmail.com',
                'alamat' => 'Jl. Ke Sana, No 15',
                'no_telp' => '088888999900'
            ],
            [
                'first_name' => 'David',
                'last_name' => 'Brown',
                'email' => 'davidbrown@gmail.com',
                'alamat' => 'Jl. Sebelah Sini, No 6',
                'no_telp' => '086666777788'
            ]
        ]
    ]);
});

Route::get('/bookinglist', function () {
    return view('adminpage/bookinglist', [
        'booking_list' => [
            [
                'name' => 'John Doe',
                'room' => 'Luxury Room',
                'quantity' => 2,
                'check_in' => '12/10/2023',
                'check_out' => '15/10/2023',
                'total' => 1500000,
                'status' => 'Lunas'
            ],
            [
                'name' => 'Jane Smith',
                'room' => 'Family Room',
                'quantity' => 1,
                'check_in' => '18/10/2023',
                'check_out' => '20/10/2023',
                'total' => 500000,
                'status' => 'Belum Lunas'
            ],
            [
                'name' => 'Michael Johnson',
                'room' => 'Deluxe Room',
                'quantity' => 2,
                'check_in' => '25/10/2023',
                'check_out' => '30/10/2023',
                'total' => 1200000,
                'status' => 'Lunas'
            ],
            [
                'name' => 'Alice Brown',
                'room' => 'Suite Room',
                'quantity' => 1,
                'check_in' => '05/11/2023',
                'check_out' => '10/11/2023',
                'total' => 800000,
                'status' => 'Belum Lunas'
            ],
            [
                'name' => 'Sarah Johnson',
                'room' => 'Deluxe Room',
                'quantity' => 1,
                'check_in' => '14/11/2023',
                'check_out' => '17/11/2023',
                'total' => 600000,
                'status' => 'Belum Lunas'
            ],
            [
                'name' => 'Robert Wilson',
                'room' => 'Family Room',
                'quantity' => 2,
                'check_in' => '22/11/2023',
                'check_out' => '26/11/2023',
                'total' => 1000000,
                'status' => 'Lunas'
            ],
            [
                'name' => 'Linda Martinez',
                'room' => 'Suite Room',
                'quantity' => 1,
                'check_in' => '02/12/2023',
                'check_out' => '07/12/2023',
                'total' => 800000,
                'status' => 'Belum Lunas'
            ],
            [
                'name' => 'David Brown',
                'room' => 'Luxury Room',
                'quantity' => 1,
                'check_in' => '10/12/2023',
                'check_out' => '15/12/2023',
                'total' => 750000,
                'status' => 'Lunas'
            ]
        ]
    ]);
});