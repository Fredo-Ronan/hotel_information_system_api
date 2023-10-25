@extends('maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
    <li class="nav-item active"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
</ul>
@endsection

@section('login-register-btn')
<a href="{{ url('/login') }}">
    <button class="btn btn-light" style="border-radius: 10px;">Login</button>
</a>
<a href="{{ url('signup') }}">
    <button class="btn btn-success" style="border-radius: 10px;">Sign Up</button>
</a>
@endsection

@section('contact-content')
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact
                            Us</span></p>
                    <h1 class="mb-4 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info rounded bg-white p-4">
                    <p><span>Address:</span> Jl. Kesitu Aja, No 7, Kota Yogyakarta</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info rounded bg-white p-4">
                    <p><span>Phone:</span> <a href="tel://1234567920">+62 9283 2938 3847</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info rounded bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@5starshotel.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info rounded bg-white p-4">
                    <p><span>Website</span> <a href="#">the5stars.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0981783402535!2d110.4135541749086!3d-7.779414177184221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sUniversitas%20Atma%20Jaya%20Yogyakarta%20-%20Kampus%203%20Gedung%20Bonaventura%20Babarsari!5e0!3m2!1sid!2sid!4v1698141567898!5m2!1sid!2sid" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection