@extends('../maintemplate')

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item active"><a href="{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/restaurant') }}" class="nav-link">Restaurant</a></li>
    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
</ul>
@endsection

@section('rooms-content')
<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Restaurant</span></p>
                    <h1 class="mb-4 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-room">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Harbor Lights Rooms</span>
                <h2 class="mb-4">Hotel Master's Rooms</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <!-- php variables for toggle the room images layout position -->
            @php
            $img_class = '';
            $arrow_class = 'left-arrow';
            $toggle_img_class = false;
            @endphp
            <!-- end of php variables for toggle the room images layout position -->

            @foreach($rooms as $index=>$room)
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex ftco-animate">  
                    <!-- toggle condition for room images layout position -->
                    @php
                    if($index%2 != 1 && $index != 0){
                        $toggle_img_class  = !$toggle_img_class;
                        $img_class = ($toggle_img_class ? 'order-md-last' : '');
                        $arrow_class = ($toggle_img_class ? 'right-arrow' : 'left-arrow');
                    }

                    $image_path = $room['picture'];
                    $room_details = $room['room_name'];
                    @endphp
                    <!-- end of toggle condition for room images layout position -->

                    <a href="#" class="img {{$img_class}}" style="background-image: url('{{$image_path}}')"></a>
                    <div class="half {{$arrow_class}} d-flex align-items-center">
                        <div class="text p-4 text-center">
                            <p class="star mb-0">
                                @for($i = 0; $i < $room['stars']; $i++)
                                <span class="ion-ios-star"></span>
                                @endfor
                            </p>
                            <p class="mb-0">
                                <span class="price mr-1">${{ number_format($room['price'], 2, '.') }}</span> 
                                <span class="per">per night</span>
                            </p>
                            <h3 class="mb-3">
                                <a href="rooms.html">{{ $room['room_name'] }}</a>
                            </h3>
                            <p class="pt-1">
                                <!-- <a href="/room-detail?name={{$room_details}}" class="btn-custom px-3 py-2 rounded">
                                    View Details 
                                    <span class="icon-long-arrow-right"></span>
                                </a> -->
                                <a href="/{{$room['room_name']}}" class="btn-custom px-3 py-2 rounded">
                                    View Details 
                                    <span class="icon-long-arrow-right"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection