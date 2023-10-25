@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{ url('/admin') }}" class="nav-link">Rooms Data</a></li>
    <li class="nav-item active"><a href="{{ url('/addroom') }}" class="nav-link">Add Room</a></li>
    <li class="nav-item"><a href="{{ url('/bookinglist') }}" class="nav-link">Booking List</a></li>
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

@section('addroom')
<style>
    .form-container {
        margin-top: 4rem;
        margin-bottom: 4rem;
    }

    .form-container form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .form-control {
        border-radius: 10px;
    }

    .form-control:focus {
        border: 2px solid #21cc7a;
        box-shadow: 0px 0px 10px 9px #21cc7a;
    }
</style>

<div class="hero-wrap" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Admin</a></span> <span
                            class="mr-2"><a href="rooms.html"></a></span> <span>Add Room</span></p>
                    <h1 class="mb-4 bread">Add room</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-container">
        <h2>Isi Detail Kamarnya</h2>
        <form action="{{ url('/admin') }}">
            <input type="text" name="room_name" class="form-control" placeholder="Room Name">
            <input type="text" name="available" class="form-control" placeholder="Available">
            <select class="form-control" name="status">
                <option disabled selected >Status</option>
                <option value="">Aktif</option>
                <option value="">Tidak Aktif</option>
            </select>
            <input type="number" class="form-control" placeholder="Price">

            <div>
                <button class="btn btn-success" style="border-radius: 10px;">Add</button>
                <button class="btn btn-danger" style="border-radius: 10px;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    const userBtn = document.querySelector('.user-btn');
    
    userBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });

</script>
@endsection