@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
        <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
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

@section('room-detail')
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span
                            class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Rooms Single</span></p>
                    <h1 class="mb-4 bread">Rooms Details</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="room-img" style="background-image: url(images/room-4.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="room-img" style="background-image: url(images/room-5.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="room-img" style="background-image: url(images/room-6.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                        <h2 class="mb-4">Luxury Room <span>- (4 Available rooms)</span></h2>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul class="list">
                                <li><span>Max:</span> 3 Persons</li>
                                <li><span>Size:</span> 45 m2</li>
                            </ul>
                            <ul class="list ml-md-5">
                                <li><span>View:</span> Sea View</li>
                                <li><span>Bed:</span> 1</li>
                            </ul>
                        </div>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                            skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                            her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                            continued her way.</p>

                        <div class="mt-2">
                            <button class="btn btn-primary" value="Booking" onclick="peringatanHarusLogin()">Booking</button>
                        </div>
                    </div>

                    <div class="col-12 room-single ftco-animate mb-5 mt-4 justify-content-center">
                        <h3 class="mb-4">Take A Tour</h3>
                        <div class="block-16" style="max-width:fit-content;">
                            <figure>
                                <img src="images/room-4.jpg" alt="Image placeholder" class="img-fluid">
                                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span
                                        class="icon-play"></span></a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
                        <h4 class="mb-4">Review &amp; Ratings</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" class="star-rating">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star"></i> 100 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star-o"></i> 30 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i> 5
                                                    Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                    Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i> 0
                                                    Ratings</span></p>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function peringatanHarusLogin() {
        alert('Anda Harus Login dulu untuk melakukan booking kamar!');
    }
</script>
@endsection
