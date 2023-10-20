@extends('../maintemplate')

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/restaurant') }}" class="nav-link">Restaurant</a></li>
    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
</ul>
@endsection

@section('room-detail')
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span
                            class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Suite Room</span></p>
                    <h1 class="mb-4 bread">Suite Room</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="room-img" style="background-image: url(images/room-1.jpg);"></div>
                            </div>
                            <div class="item">
                                <div class="room-img" style="background-image: url(images/room-7.jpg);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                        <h2 class="mb-4">Suite Room <span>- (5 Available rooms)</span></h2>
                        <p>Kamar dengan ruang kenyamanan yang eksklusif bagi tamu yang menginap.</p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul class="list">
                                <li><span>Max:</span> 2 Persons</li>
                                <li><span>Size:</span> 35 m2</li>
                            </ul>
                            <ul class="list ml-md-5">
                                <li><span>View:</span>Mountains</li>
                                <li><span>Bed:</span> 2</li>
                            </ul>
                        </div>
                        <p>Anda dapat menjadi tamu hotel yang istimewa berkat kemewahan dan ruangan yang eksklusif dari Suite Room ini.</p>
                    </div>
                    <div class="col-md-12 room-single ftco-animate mb-5 mt-4">
                        <h3 class="mb-4">Take A Tour</h3>
                        <div class="block-16">
                            <figure>
                                <img src="images/room-1.jpg" alt="Image placeholder" class="img-fluid">
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
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i> 5 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i><i class="icon-star-o"></i><i
                                                        class="icon-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate pl-md-5">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#">Properties <span>(12)</span></a></li>
                        <li><a href="#">Home <span>(22)</span></a></li>
                        <li><a href="#">House <span>(37)</span></a></li>
                        <li><a href="#">Villa <span>(42)</span></a></li>
                        <li><a href="#">Apartment <span>(14)</span></a></li>
                        <li><a href="#">Condominium <span>(140)</span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Oct 30, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Oct 30, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Oct 30, 2019</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">dish</a>
                        <a href="#" class="tag-cloud-link">menu</a>
                        <a href="#" class="tag-cloud-link">food</a>
                        <a href="#" class="tag-cloud-link">sweet</a>
                        <a href="#" class="tag-cloud-link">tasty</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection