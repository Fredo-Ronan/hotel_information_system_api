@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/blogLoggedIn') }}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{ url('/listBoking') }}" class="nav-link">Booking</a></li>
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

@section('home-content')
<style>
    .search-parameter {
        display: flex; 
        gap: 1rem; 
        background-color: #e8e9eb; 
        padding-left: 1rem; 
        border-radius: 10px;
    }

    .card-container-wrapper {
        display: flex;
        justify-content: center;
    }

    .card-container {
        display: flex;
        gap: 2rem;
        justify-content: center;
        flex-wrap: wrap;
        flex-basis: 70%;
    }

    .card {
        border-radius: 10px;
        box-shadow: 4px 6px 15px -3px rgba(0,0,0,0.15);
    }

    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .detail {
        display: flex;
        justify-content: space-between;
    }

    .heading-container {
        display: flex;
        justify-content: space-between;
    }

    .right-side {
        display: flex;
        flex-wrap: wrap;
        flex-basis: 150%;
        gap: 1rem;
    }

    .size-facility {
        width: 12rem;
    }
    
    .card-img-top {
        transition: all .5s;
        background-color: black;
    }

    .card-img-top:hover {
        opacity: 0.5;
    }

    .card-img-top:hover + .show-view {
        display: block;
    }

    .view-details-btn {
        position: absolute;
        top: 5rem;
        left: 4rem;
        right: 4rem;
        bottom: 14rem;
        display: none;
        font-weight: bold;
        border-radius: 10px;
    }

    .view-details-btn:hover {
        display: block;
    }
</style>

<div class="hero">
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay" style="background: black;"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end">
                    <div class="col-md-6 ftco-animate">
                        <div class="text">
                            <h2>More than a hotel... an experience</h2>
                            <h1 class="mb-3">Hotel for the whole family, all year round.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay" style="background: black;"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end">
                    <div class="col-md-6 ftco-animate">
                        <div class="text">
                            <h2>The 5 Stars Hotel &amp; Resort</h2>
                            <h1 class="mb-3">It feels like staying in your own home.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <form action="{{ url('/room_detail') }}" class="booking-form aside-stretch">
                    <div class="row">
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3">
                                    <div class="search-parameter">
                                        <i class="bi bi-calendar" style="margin-top: 3px;"></i>
                                        <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3">
                                    <div class="search-parameter">
                                        <i class="bi bi-calendar" style="margin-top: 3px;"></i>
                                        <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3">
                                    <div class="search-parameter">
                                        <i class="bi bi-house-door" style="margin-top: 3px;"></i>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="" disabled selected>Room</option>
                                                    <option value="Suite">Suite</option>
                                                    <option value="Family Room">Family Room</option>
                                                    <option value="Deluxe Room">Deluxe Room</option>
                                                    <option value="Classic Room">Classic Room</option>
                                                    <option value="Superior Room">Superior Room</option>
                                                    <option value="Luxury Room">Luxury Room</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3">
                                <div class="search-parameter">
                                        <i class="bi bi-people-fill" style="margin-top: 3px;"></i>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <select name="" id="" class="form-control">
                                                    <option value="" disabled selected>Guests</option>
                                                    <option value="1 Adult">1 Adult &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="2 Adult">2 Adult</option>
                                                    <option value="3 Adult">3 Adult</option>
                                                    <option value="4 Adult">4 Adult</option>
                                                    <option value="5 Adult">5 Adult</option>
                                                    <option value="6 Adult">6 Adult</option>
                                                </select>
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md d-flex">
                            <div style="display: flex; align-items: center;">
                                <a href="{{ url('/room_detail') }}">
                                    <button type="submit" class="btn btn-success" style="padding-right: 4rem; padding-left: 4rem; border-radius: 10px;">Search</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" style="padding-top: 4rem;">
    <div class="container" style="margin-bottom: 2rem;">
        <div class="heading-container">
            <h2>Our Most Popular Rooms</h2>
            <div style="display: flex; align-items: center;">
                <button class="btn btn-success" style="border-radius: 10px;">
                    <a href="{{ url('/roomsLoggedIn') }}" style="color: white; text-decoration: none;">View All</a>
                </button>
            </div>
        </div>
    </div>
    <div class="card-container-wrapper">
        <div class="card-container">
            @foreach($highlighted_rooms as $index=>$room)
            <a href="{{ url('/room_detail') }}">
                <div class="card ftco-animate" style="width: 20rem; height: 100%;">
                    <div>
                        <img src="{{$room['picture']}}" class="card-img-top" alt="">
                        <button class="btn btn-light view-details-btn show-view">View Details</button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $room['room_name'] }}</h5>
                        <div class="detail">
                            <p class="card-text">
                                ${{ $room['price'] }} per night
                            </p>
    
                            <div style="display: flex;">
                                @for($j = 0; $j < $room['stars']; $j++)
                                <span class="ion-ios-star" style="color: #fbbb00;"></span>
                                @endfor
    
                                <p style="margin-left: 0.5rem;">{{ $room['stars'] }}</p>
                            </div>
                        </div>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    
</section>

<section class="ftco-section" style="padding-top: 4rem;">
    <div class="container" style="display: flex; gap: 2rem;">
        <div class="left-side ftco-animate">
            <h2>We do our best facilities provide you</h2>
            <p>Discover Your Ideal Haven: Find Your Perfect Stay at The 5 Stars Hotel</p>

            <div>
                <button class="btn btn-success" style="border-radius: 10px;">Contact Now</button>
            </div>
        </div>

        <div class="right-side ftco-animate">
            @foreach($facilities as $index=>$facility)
            <div class="card size-facility ftco-animate">
                <div class="card-body" style="display: flex; align-items: center; justify-content: center;">
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <img src="{{$facility['image_path']}}" alt="">
                        <p class="card-text">{{ $facility['facility_name'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="card mb-3 ftco-animate" style="background-color: #f4fbf8; border: none;">
            <div class="row g-0">
                <div class="col-md-6 ftco-animate">
                    <img src="{{ asset('images/hotel-image.png') }}" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="card-body">
                        <h2 class="card-title">Discover our History</h2>
                        <p class="card-text">
                            Our commitment to excellence is evident in every aspect of your stay. 
                            We take pride in our attention to detail, providing a seamless and memorable experience for all our guests. 
                            From our 24-hour concierge service to personalized room service, we're here to meet your every need.
                        </p>
                        <div>
                            <button class="btn btn-success" style="border-radius: 10px;">
                                <a href="" style="text-decoration: none; color: white;">Explore More</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const userBtn = document.querySelector('.user-btn');
    
    userBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });

</script>
@endsection