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
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}


  .form-ngisi {
        border-radius: 20px; /* Sesuaikan dengan radius yang Anda inginkan */
        padding: 10px; /* Untuk memberi ruang agar input lebih terlihat bulat */
        border: 1px solid #ccc; /* Atur border sesuai kebutuhan Anda */
        width: 100%; /* Atur lebar sesuai kebutuhan Anda */
        box-sizing: border-box;
  }

  .customm-button {
        background-color: lightblue;
        border: 2000px;
        border-radius: 2000px;
        padding: 10px 155px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .custom-button.bttn.bttn-lg {
        padding: 20px 40px; 
        font-size: 20px;
    }
</style>

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

<section class="vh-100 gradient-custom background-slider">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card-body p-5 text-center">
          <div class="mb-md-5 mt-md-4 pb-5">
          <div>
              <p class="mb-0 text-white">Don't have an account? <a href="#!" class="text-blue fw-bold">Register</a></p>
            </div>
            <h2 style="color: white; font-size: 30px; text-align: center; padding: 10px 0 30px 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Login</h2>

            <form action="#" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-ngisi" placeholder="Email" required>
              </div>

              <div class="form-group">
                <input id="password-field" type="password" class="form-ngisi" placeholder="Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>

              <button class="customm-button bttn bttn-lg" type="submit">Login</button>

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

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </form>
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
