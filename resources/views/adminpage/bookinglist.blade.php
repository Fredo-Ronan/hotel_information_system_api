@extends('../maintemplate')

@section('admin-style')
<link href="{{ asset('css/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/slick/slick.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/select2/select2.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link">Rooms Data</a></li>
    <li class="nav-item"><a href="{{ url('/addroom') }}" class="nav-link">Add Room</a></li>
    <li class="nav-item active"><a href="{{ url('/bookinglist') }}" class="nav-link">Booking List</a></li>
    <li class="nav-item"><a href="{{ url('/userdata') }}" class="nav-link">User Data</a></li>
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

    .search-field {
        border-radius: 10px; 
        padding-left: 1rem; 
        padding-right: 1rem; 
        padding-top: 0.5rem; 
        padding-bottom: 0.5rem;
        border: 2px solid rgba(179, 179, 179);
        margin-left: 10px;
    }

    .search-field:focus {
        border: 2px solid #21cc7a;
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
        <h5 style="color: white; margin: 0;">Admin</h5>
    </div>
</div>
@endsection

@section('admin')
<style>
    body {
        background-color: #e5e5e5;
    }
</style>

<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Admin</a></span> <span
                            class="mr-2"><a href="rooms.html"></a></span> <span>Booking List</span></p>
                    <h1 class="mb-4 bread">Booking List</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
    <!-- DATA TABLE -->
    <h3 class="title-4 m-b-35">Booking List</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">All Properties</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Today</option>
                    <option value="">3 Days</option>
                    <option value="">1 Week</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <button class="au-btn-filter">
                <i class="zmdi zmdi-filter-list"></i>filters
            </button>

            <input type="text" class="search-field" placeholder="Search booking..." size="20">
        </div>
        <div class="table-data__tool-right">
            <a href="{{ url('/addroom') }}">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>
                    add item
                </button>
            </a>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Export</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>name</th>
                    <th>room</th>
                    <th>quantity</th>
                    <th>check in</th>
                    <th>check out</th>
                    <th>total</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($booking_list as $index=>$booking)
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{ $booking['name'] }}</td>
                    <td>{{ $booking['room'] }}</td>
                    <td class="desc">{{ $booking['quantity'] }} rooms</td>
                    <td>
                        <span class="block-email">{{ $booking['check_in'] }}</span>
                    </td>
                    <td>
                        <span class="block-email">{{ $booking['check_out'] }}</span>
                    </td>
                    <td>Rp. {{ number_format($booking['total'], 0, ',') }}</td>
                    <td>
                        @if($booking['status'] == 'Lunas')
                        <span class="status--process">{{ $booking['status'] }}</span>
                        @elseif($booking['status'] == 'Belum Lunas')
                        <span class="status--denied">{{ $booking['status'] }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE -->
</div>

<script>
    const userBtn = document.querySelector('.user-btn');
    
    userBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });

</script>
@endsection

@section('script-admin')
<script src="{{ asset('css/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('css/slick/slick.min.js') }}"></script>
<script src="{{ asset('css/select2/select2.min.js') }}"></script>
<script src="{{ asset('js/main2.js') }}"></script>
@endsection