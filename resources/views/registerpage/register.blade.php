@extends('../maintemplate')

<style>
  .custom-label {
    color: black;
    font-weight: bold;
  }

  .registration-section {
    position: relative;
    background: url('images/bg_1.jpg') no-repeat center center fixed;
    background-size: cover;
    transition: background-image 1s ease-in-out;
  }

  .registration-section.bg2 {
    background-image: url('images/bg_2.jpg');
  }

  .card-body {
    background: linear-gradient(to bottom, #87CEEB, #ADD8E6); 

  }
</style>

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/restaurant') }}" class="nav-link">Restaurant</a></li>
    <li class="nav-item"><a href="{{ url('/about') }}" class ="nav-link">About Us</a></li>
    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
</ul>
@endsection

<section class="h-100 h-custom gradient-custom-2 registration-section">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Registrasi</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                        <label class="form-label custom-label" for="form3Examplev2">First name</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        <label class="form-label custom-label" for="form3Examplev3">Last name</label>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="alamatt" class="form-control form-control-lg" />
                      <label class="form-label custom-label" for="alamatt">Alamat</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="nomorteleponn" class="form-control form-control-lg" />
                      <label class="form-label custom-label" for="nomorteleponn">Nomor Telepon</label>
                    </div>
                  </div>
                    
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="emaill" class="form-control form-control-lg" />
                      <label class="form-label custom-label" for="emaill">Email</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="password" class="form-control form-control-lg" />
                      <label class="form-label custom-label" for="password">Password</label>
                    </div>
                  </div>

                  <button type="button" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const registrationSection = document.querySelector('.registration-section');
  let currentBg = 1;

  setInterval(() => {
    if (currentBg === 1) {
      registrationSection.classList.add('bg2');
      currentBg = 2;
    } else {
      registrationSection.classList.remove('bg2');
      currentBg = 1;
    }
  }, 10000); 
</script>
