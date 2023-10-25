@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{ url('/loggedIn') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
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

@section('detail')
<div class="hero-wrap"
    style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/386301950.jpg?k=afb811280ac0cb4a344bd1122c842b4b4edcfe53de644a967042b0ed1b6ee465&o=&hp=1');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-item-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Detail</span>
                    </p>
                    <h1 class="mb-4 bread">Detail Reservation</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="col-10 mt-4" style="margin:0 auto; margin-bottom: 15px;">
        <div class="card">
            <div class="card-header" style="background-color:  rgb(0, 105, 251)">
                <div class="row ftco-footer-social list-unstyled">
                    <div class="col mt-3 "><a href="#"><i class="icon-filter_list"
                                style="color:white; font-size: 40px; "></i></a></div>
                    <div class="col-8 fw-bold mt-2">
                        <h1 style="color: white">Detail Reservasi</h1>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card mb-3 col-lg-12 h-10 ">
                        <div class="row ">
                            <div class="col-6 p-3">
                                <img src="https://www.konsultasi-akustik.com/wp-content/uploads/2021/02/interior-modern-comfortable-hotel-room-scaled.jpg"
                                    class="img-fluid rounded-start " style=" border-radius: 5px; height: 350px; width:450px; object-fit: cover;"
                                    alt="...">
                            </div>
                            <div class="col-6 ml-auto mt-2">
                                <div class="card-body p-2 ">
                                    <h1 class="card-title ml-auto fw-bold">Hotel Kelas Atas</h1>
                                    <div class="form-check ml-1">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star"></i><i class="icon-star"></i><i
                                                        class="icon-star-o"></i> 5 Ratings</span></p>
                                        </label>
                                    </div>
                                    <p class="m-0 card-text">
                                        2 Orang, 1 double bed dan 1 twin bed, Non-smoking
                                    </p>
                                    <p class="card-text mb-0 mt-5">Check in: Minggu, October 19, 2023</p>
                                    <p class="card-text mt-0">Check out: Selasa, October 21, 2023</p>
                                    <p class="card-text">2 hari menginap</p>
                                    <p class="card-text mt-0">Total Harga : Rp. 1.500.000</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-5" style="margin: 8px 0px 0px 50px;">
                        <label>Nama</label>
                        <a type="text" style="border-radius: 5px;" class="form-control" id="phone" name="phone"
                            placeholder="">
                            <p class="mt-1"> Iqbal Firmansyah Adinda </p>
                        </a>
                    </div>
                    <div class="col-5" style="margin: 8px 0px 0px 5px;">
                        <label>Telepon</label>
                        <a type="text" style="border-radius: 5px;" class="form-control" id="phone"
                            name="phone" placeholder="">
                            <p class="mt-1"> 081223046489 </p>
                        </a>
                    </div>
                    <div class="col-5" style="margin: 8px 0px 0px 50px;">
                        <label>Email</label>
                        <a type="text" style="border-radius: 5px;" class="form-control" id="phone"
                            name="phone" placeholder="">
                            <p class="mt-1"> Iqbal@gmail.com </p>
                        </a>
                    </div>
                    <div class="col-5" style="margin: 8px 0px 0px 5px;">
                        <label>Metode Pembayaran</label>
                        <a type="text" style="border-radius: 5px;" class="form-control" id="phone"
                            name="phone" placeholder="">
                            <p class="mt-1"> Bank BRI </p>
                        </a>
                    </div>
                </div>
                <div style="margin: 20px 0px 25px 2px; width: 300px; ">
                    <button type="button"
                        style="background-color:  rgb(0, 105, 251); margin: 8px 0px 0px 50px; color:white; border-radius: 5px;" class="btn "
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Bayar
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(0, 105, 251)">
                <h5 class="modal-title fs-5 text-light" id="staticBackdropLabel">Cara Pembayaran</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h2 class="fw-bold">Bank BRI</h2>
                    <hr>
                    <h5>No. Rekening</h5>
                    <h5>911 3990 4899 4975</h5>
                    <hr>
                    <div>
                    <p>Petunjuk Pembayaran</p>
                    <hr>
                    <p>1. Masuk ke menu Transfer kemudian klik Tambah Penerima</p>
                    <p>2. Pilih Bank Tujuan kemudian masukan no rekening 911 3990 4899 4975 dan klik tombol lanjutkan</p>
                    <p>3. Masukan nominal yang diminta </p>
                    <p>4. Klik tombol transfer </p>
                    <p>5. Selesai </p>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" >Close</button> --}}
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="border-radius: 5px;" data-bs-dismiss="modal"
                >Selesai</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(0, 105, 251)">
                <h5 class="modal-title fs-5 text-light" id="staticBackdropLabel">Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-1 mt-2">
                        <i class="icon-done" style="color:rgb(0, 0, 0); font-size: 35px; "></i>
                    </div>
                    <div class="col-11 ml-0">
                        <h1 class="m-0 fw-bold">Pembayaran Berhasil</h1>
                    </div>
                    <hr>
                    <h4 class="fw-semibold mt-2">Iqbal Firmansyah Adinda</h4>
                    <h5 class="m-0 mt-3 fw-semibold">Total Harga: Rp. 1.500.000,</h5>
                    <p class="m-0 mt-4">Anda telah berhasil melakukan reservasi</p>
                    <p class="m-0">pada tanggal 19 October 2023</p>
                </div>
            </div>
            <div class="modal-footer">
                    <a type="button" class="btn btn-secondary"  href="{{ url('/loggedIn') }}"style="border-radius: 5px;"
                    >Selesai</a>
            </div>
        </div>
    </div>
</div> 

<script>
    const userBtn = document.querySelector('.user-btn');
    
    userBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });

</script>
@endsection
