@extends('../maintemplate')

@section('brand')
<a class="navbar-brand" href="{{ url('/loggedIn') }}">The <span>5 Stars</span> Hotel</a>
@endsection

@section('nav')
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ url('/loggedIn') }}" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="{{ url('/roomsLoggedIn') }}" class="nav-link">Our Rooms</a></li>
        <li class="nav-item"><a href="{{ url('/blogLoggedIn') }}" class="nav-link">Blog</a></li>
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

@section('booking')
<div class="hero-wrap"
    style="background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/386301950.jpg?k=afb811280ac0cb4a344bd1122c842b4b4edcfe53de644a967042b0ed1b6ee465&o=&hp=1');">
    <div class="overlay" style="background-color: black;"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Booking</span>
                    </p>
                    <h1 class="mb-4 bread">Booking</h1>
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
                    <div class="col-1 mt-3 "><a href="#"><i class="icon-hotel"
                                style="color:white; font-size: 40px; "></i></a></div>
                    <div class="col-2 fw-bold mt-3">
                        <h3 style="color: white"> Room 1</h3>
                    </div>
                    <div class="col-6 mt-4 ">
                        <p style="color: white">
                            2 adults, 1 double bed and 1 twin bed, Non-smoking
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" style="border-radius: 5px;" class="form-control" placeholder="First name"
                            aria-label="First name">
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" style="border-radius: 5px;" class="form-control" placeholder="Last name"
                            aria-label="Last name">
                    </div>
                </div>
                <div class="row">

                    <div class="form-group" style="margin: 8px 0px 0px 5px;">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" style="border-radius: 5px;" class="form-control" id="phone" name="phone">
                    </div>

                    <div class="form-group col-5" style="margin: 8px 0px 0px 5px;">
                        <label for="phone">Email</label>
                        <input type="tel" style="border-radius: 5px;" class="form-control" id="phone" name="phone"
                            placeholder="Email">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-10 mt-4" style="margin:0 auto; margin-bottom: 15px;">
        <i class='bx bx-home'></i>

        <div class="card">
            <div class="card-header" style="background-color:  rgb(0, 105, 251)">

                <div class=" row ftco-footer-social list-unstyled ">
                    <div class="col-1 mt-2"><a href="#"><i class="icon-account_balance_wallet"
                                style="color:white; font-size: 45px; "></i></a></div>
                    <div class="col-4 mt-1 d-flex">
                        <h3 style="color: white; margin-right: 25px;" class="mt-2">Metode Pembayaran</h3>
                    </div>
                </div>
            </div>

            <div class="card-body p-2 m-0">
                <nav class="navbar navbar-expand-lg p-2 m-0 border-bottom ">
                    <div class="container-fluid p-0">
                        <div class="navbar">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"
                                        role="tab" aria-controls="tab1" aria-selected="true">Kartu Kredit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                                        aria-controls="tab2" aria-selected="false">Tranfer Bank</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="col">
                            <label class="form-label">Nama di kartu</label>
                            <input type="text" style="border-radius: 5px;" class="form-control"
                                placeholder="Nama di Kartu" aria-label="First name">
                        </div>
                        <div class="col mt-2">
                            <label class="form-label">Debit/Nomor Kartu</label>
                            <input type="text" style="border-radius: 5px;" class="form-control"
                                placeholder="Last name" aria-label="Nomor">
                        </div>
                        <label class="form-label " style="margin: 8px 0px 0px 15px;">Expiration Date</label>
                        <div class="row ms-">
                            <div class="form-group col-4 " style="margin: 8px 0px 0px 15px;">
                                <select class="form-control" style="border-radius: 5px;" id="bulan" name="bulan">
                                    <option value="">Pilih Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>

                            <div class="form-group col-4 mt-2" style="margin: 8px 0px 0px 15px;">
                                <select class="form-control" style="border-radius: 5px;" id="tahun" name="tahun">
                                    <option value="">Pilih Tahun</option>
                                    @php
                                    $currentYear = date('Y');
                                    $startYear = $currentYear - 10; // Ganti dengan tahun awal yang Anda inginkan
                                    $endYear = $currentYear + 10; // Ganti dengan tahun akhir yang Anda inginkan
                                    @endphp
                                    @for ($year = $startYear; $year <= $endYear; $year++) <option
                                        value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin: 8px 0px 10px 2px;">
                            <div class="col-3 mt-2">
                                <label class="form-label">Kode Security</label>
                                <input type="text" style="border-radius: 5px;" class="form-control"
                                    placeholder="Kode Security" aria-label="Kode Security">
                            </div>
                            <div class="col-3 mt-2">
                                <label class="form-label">Billing</label>
                                <input type="text" style="border-radius: 5px;" class="form-control"
                                    placeholder="Billing" aria-label="Billing">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div class="col">
                            <div class="form-group">
                                <label for="bank">Pilih Bank</label>
                                <select class="form-control" name="bank">
                                    <option value="">Pilih Bank</option>
                                    <option value="Bank A">BRI</option>
                                    <option value="Bank B">BNI</option>
                                    <option value="Bank C">BCA</option>
                                    <option value="Bank D">MANDIRI</option>
                                    <option value="Bank E">CIMB</option>
                                    <option value="Bank F">BJB</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="margin: 20px 0px 25px 135px; width: 300px; ">
        <a class="btn" style="background-color:  rgb(0, 105, 251); color:white; border-radius: 5px;" type="submit"
            value="Booking" href="{{ url('pembayaran/detail') }}">Selesaikan Booking Anda</a>
    </div>

</section>

<script>
    const userBtn = document.querySelector('.user-btn');
    userBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });
</script>
@endsection


