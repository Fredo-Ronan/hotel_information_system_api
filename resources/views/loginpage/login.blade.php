@extends('../maintemplate')

<style>
  .custom-label {
    color: black;
    font-weight: bold;
  }

  .background-slider {
    position: relative;
    background: url('images/bg_1.jpg') no-repeat center center fixed;
    background-size: cover;
    transition: background-image 1s ease-in-out;
  }

  .background-slider.bg2 {
    background-image: url('images/bg_2.jpg');
  }

  .textheader-white {
    color: white;
    font-size: 30px;
  }

  .text-white {
    color: white;
  }

  .form-control {
    background: transparent !important;
    border: none;
    height: 50px;
    color: rgba(255, 255, 255, 1) !important;
    border: 1px solid transparent;
    border-radius: 40px;
    padding-left: 20px;
    padding-right: 20px;
  }

  .form-control::placeholder {
    color: rgba(255, 255, 255, 0.8) !important;
  }

  .form-control:hover,
  .form-control:focus {
    background: rgba(255, 255, 255, 0.08) !important;
    outline: none;
    box-shadow: none;
    border-color: rgba(255, 255, 255, 0.4);
  }

  .form-control:focus {
    border-color: rgba(255, 255, 255, 0.4);
  }

  textarea.form-control {
    height: inherit !important;
  }
</style>

@section('nav')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href "{{ url('/rooms') }}" class="nav-link">Our Rooms</a></li>
    <li class="nav-item"><a href="{{ url('/restaurant') }}" class="nav-link">Restaurant</a></li>
    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
    <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
</ul>
@endsection

<section class="vh-100 gradient-custom background-slider">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card-body p-5 text-center">
          <div class="mb-md-5 mt-md-4 pb-5">
            <p class="textheader-white mb-5">Have an account?</p>

            <form action="#" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" required>
              </div>

              <div class="form-group">
                <input id="password-field" type="password" class="form-control" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>

              <div class="form-group d-md-flex">
                <div class="w-50">
                  <label class="checkbox-wrap checkbox-primary text-white">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-50 text-md-right">
                  <a href="#!" class="text-white">Forgot Password</a>
                </div>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </form>

            <div>
              <p class="mb-0 text-white">Don't have an account? <a href="#!" class="text-blue-50 fw-bold">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const backgroundSlider = document.querySelector('.background-slider');
  let currentBg = 1;

  setInterval(() => {
    if (currentBg === 1) {
      backgroundSlider.classList.add('bg2');
      currentBg = 2;
    } else {
      backgroundSlider.classList.remove('bg2');
      currentBg = 1;
    }
  }, 10000);
</script>
