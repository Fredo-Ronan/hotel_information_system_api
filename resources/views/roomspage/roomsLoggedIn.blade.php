@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/loggedIn') }}" class="nav-link">Home</a></li>
    <li class="nav-item active"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/blogLoggedIn') }}" class="nav-link">Blog</a></li>
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

@section('rooms-content')
<style>
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

<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Rooms</span></p>
                    <h1 class="mb-4 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section" style="padding-top: 4rem;">
    <div class="container" style="margin-bottom: 2rem;">
        <div class="heading-container">
            <h2>Our Rooms</h2>
        </div>
    </div>
    <div class="card-container-wrapper">
        <div class="card-container">
            @foreach($rooms as $index=>$room)
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
                    </div>
                </div>
            </a>
            @endforeach
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