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
    <li class="nav-item"><a href="{{ url('/bookinglist') }}" class="nav-link">Booking List</a></li>
    <li class="nav-item active"><a href="{{ url('/userdata') }}" class="nav-link">User Data</a></li>
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

    .form-control:focus {
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
                            class="mr-2"><a href="rooms.html"></a></span> <span>User Data</span></p>
                    <h1 class="mb-4 bread">User Data</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
    <!-- DATA TABLE -->
    <h3 class="title-4 m-b-35">User Data</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <input type="text" class="form-control" placeholder="Search user..." style="border-radius: 10px;">
        </div>
        <div class="table-data__tool-right">
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
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>alamat</th>
                    <th>no telp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_user as $index=>$user)
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{ $user['first_name'] }}</td>
                    <td>{{ $user['last_name'] }}</td>
                    <td>
                        <span class="block-email">{{ $user['email'] }}</span>
                    </td>
                    <td>{{ $user['alamat'] }}</td>
                    <td>{{ $user['no_telp'] }}</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
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