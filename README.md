# Hotel Information System API | UAS Pemrograman Web Gasal 2023/2024

### A bit of story behind this project 🧐
This project is one of my college big assignment to make a Full Stack Hotel Information System and this repo is the backend side of the whole system. You can check the frontend at https://github.com/Fredo-Ronan/hotel_information_system.<br> 

This backend side is built using Laravel + MySQL database and it's dockerized so that this project can be deployed on any machine easily. You can access this backend at https://his-api.fredoronan.web.id/ but there is nothing to see there :)
<br>

> _Below is just details that important when i submit the assignment to the lecturer, so you can ignore those :)_ 

## Kelas B Kelompok 15

## Anggota Kelompok:
- Martinus Bagas Billy Valentino Putra (210711354) - Frontend React Halaman Booking, Booking Detail, Modal Pembayaran.
- Boniface Fredo Ronan Antolino (210711446) - Backend API Laravel, Frontend React Login, Register, Halaman Utama, Integrasi Backend dan Frontend, Deploy dan Hosting.
- Iqbal Firmansyah Adinda (210711485) - Frontend React Admin.

## Username & Password Login:
- Login User:
   - Username : User 1
   - Password : password1
- Login Admin:
   - Username : admin
   - Password : admin
## Bonus Yang diambil
- Hosting:
   - Backend: [https://the5stars-hotel-api.vercel.app/](https://the5stars-hotel-api.vercel.app/)
   - Frontend: [https://the5stars-hotel.vercel.app/](https://the5stars-hotel.vercel.app/)
- Routes API:
  > NOTE! <br/>
  > route /api/api -> kalau dari link hostingan <br/>
  > route /api -> kalau dari menjalankan secara localhost
  #### _Route Admin_
    - GET /api/api/booking - Get All Booking Data (Admin)
    - GET /api/api/room - Get All Room Data (Admin)
    - GET /api/api/user - Get All User Data (Admin)
    - POST /api/api/room - Create Room Data (Admin)
    - POST /api/api/room/{id} - Update Room Data (Admin)
    - DELETE /api/api/booking/{id} - Delete Booking Data ketika user sudah check out (Admin)
    - DELETE /api/api/room/{id} - Delete Room Data (Admin)
    - DELETE /api/api/user/{id} - Delete User Data (Admin)
  #### _Route User_
    - GET /api/api/mybooking - Get All User Booking Data (User)
    - GET /api/api/getUserData/{id} - Get User Profile Data (User)
    - GET /api/api/kamar - Get All Room Data (User)
    - POST /api/api/booking - Create Booking Data (User)
    - POST /api/api/updateProfileData/{id} - Update Profile Data Except Profile Picture (User)
    - POST /api/api/updateProfilePhoto/{id} - Update Profile Picture User (User)
  #### _Route Global_
    - GET /api/api/register/verify/{verify_key} - Verify Verify Key from Email using GET
    - GET /api/api/logout - Logout for User
    - POST /api/api/register - Create User Data/Sign Up
    - POST /api/api/login - Login for User
- React:
   - Link Repository: https://github.com/Fredo-Ronan/PW2023_B_15_React
