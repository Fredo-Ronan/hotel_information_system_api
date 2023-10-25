@extends('maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/loggedIn') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item active"><a href="{{ url('/blogLoggedIn') }}" class="nav-link">Blog</a></li>
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

@section('blog-content')
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Blog</span></p>
                    <h1 class="mb-4 bread">Our Stories</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_5.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                        style="background-image: url('images/image_6.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">Oct. 30, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="btn btn-secondary rounded">More info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
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