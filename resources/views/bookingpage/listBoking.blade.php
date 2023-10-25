@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ url('/loggedIn') }}" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
        <li class="nav-item"><a href="{{ url('/blogLoggedIn') }}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ url('/listbooking') }}" class="nav-link">Booking</a></li>
        <li class="nav-item"><a href="{{ url('/contactLoggedIn') }}" class="nav-link">Contact</a></li>
    </ul>
@endsection

@section('login-register-btn')
    <style>
        .user-btn {
            display: flex;
            gap: 1rem;
            background-color: #21cc7a;
            align-items: center;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .user-btn:hover {
            cursor: pointer;
            background-color: #19a864;
        }

        .popover-body {
            color: red;
            font-weight: bold;
        }

        .popover-body:hover {
            cursor: pointer;
        }
    </style>

    <div class="user-btn" data-toggle="popover" data-placement="bottom" data-content="Logout" data-trigger="hover">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-person-circle"
            viewBox="0 0 32 32">
            <path d="M 22 12 a 6 6 90 1 1 -12 0 a 6 6 90 0 1 12 0 z" />
            <path fill-rule="evenodd"
                d="M 0 16 a 16 16 90 1 1 32 0 A 16 16 90 0 1 0 16 z m 16 -14 a 14 14 90 0 0 -10.936 22.74 C 6.484 22.452 9.61 20 16 20 s 9.514 2.45 10.936 4.74 A 14 14 90 0 0 16 2 z" />
        </svg>
        <div>
            <h5 style="color: white; margin: 0;">User 1</h5>
        </div>
    </div>
@endsection

@section('booking-success')
    <div class="hero-wrap"
        style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/386301950.jpg?k=afb811280ac0cb4a344bd1122c842b4b4edcfe53de644a967042b0ed1b6ee465&o=&hp=1');">
        <div class="overlay" style="background-color: black;"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                            <span>Booking</span>
                        </p>
                        <h1 class="mb-4 bread">Your Booking</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="card mb-3 mt-3 ml-5 mr-3" style="max-width: 1250px; box-shadow: 1px 4px 4px grey">
            <div class="row g-0">
                <div class="col-6">
                    <img src="{{ asset('images/room-4.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h2 class="card-title font-weight-bold">Luxury Room</h2>
                        <h2 class="card-text">Iqbal Firmansyah Adinda</h2>
                        <p class="card-text mt-5">3 Day 1 Night</p>
                        <p class="card-text mb-0 mt-5">Check in: Minggu, October 19, 2023</p>
                        <p class="card-text mt-0">Check out: Selasa, October 21, 2023</p>
                        <p class="card-text mt-0">Total Harga : Rp. 1.500.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
    </section>

    <script>
        const userBtn = document.querySelector('.user-btn');
        userBtn.addEventListener('click', () => {
            window.location.href = '/login';
        });
    </script>
@endsection
