@extends('../maintemplate')

<style>
  .custom-label {
    color: black;
    font-weight: bold;
  }

  .background-slider {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('images/bg_1.jpg');
    background-size: cover;
    transition: background-image 1s ease-in-out;
    opacity: 0.5;
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

  .text-green {
    color: greenyellow;
  }

  .form-ngisi:hover, .form-ngisi:focus {
    background: rgba(255, 255, 255, 0.25);
  }

  ::-webkit-input-placeholder {
    color: white;
  }

  .form-ngisi {
    font-size: 15px;
    font-weight: 500;
    color: black;
    margin-bottom:24px;
    height: 50px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: rgba(255, 255, 255, 0.5);
    transition: .3s ease-in-out;
    padding-left:10px;
    color: white;
  }

  .form-group{
    position: relative;
  }

  .form-group .toggle-password {
    position: absolute;
    top: 50%;
    right: 20px; /* Adjust this value as needed */
    transform: translateY(-110%);
    cursor: pointer;
    color: white;
  }

  .customm-button {
    background-color: #21cc7a;
    width: 100%;
    border: none;
    border-radius: 2000px;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: white;
    font-size: 20px;
    transition: all 0.3s;
    box-shadow: 3px 8px 6px -3px rgba(0,0,0,0.1);
  }

  .customm-button:hover {
    cursor: pointer;
    background-color: #13804c;
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

@section('body-style')
<style>
  body {
    background-color: black;
  }
</style>
@endsection

@section('login')
<div class="vh-100 gradient-custom background-slider"></div>
<div class="container py-5 h-100" style="position: relative;">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="margin-top: 2rem; margin-bottom: 2rem;">
      <div class="card-body text-center" style="background-color: rgba(153, 151, 151, 0.75); border-radius: 10px; margin-top: 3rem;">
        <div class="mb-md-5 mt-md-4">
          <h2
            style="color: white; font-size: 30px; text-align: center; padding: 10px 0 30px 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Login</h2>

          <form action="#" class="signin-form">
            <div class="form-group">
              <input type="text" class="form-ngisi" placeholder="Email" required>
            </div>

            <div class="form-group">
              <input id="password-field" type="password" class="form-ngisi" placeholder="Password" required>
              <i toggle="#password-field" class="bi bi-eye-slash toggle-password" id="eye-toggle-password"></i>
            </div>

            <button class="customm-button" type="submit">Login</button>

            <div class="form-group" style="display: flex; justify-content: space-between;">
              <div class="">
                <label class="checkbox-wrap checkbox-primary text-white">Remember Me
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="text-md-right">
                <a href="#!" class="text-white">Forgot Password</a>
              </div>
            </div>

            <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
              <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
            </div> -->
          </form>

          <div>
            <p class="mb-0 text-white">
              Don't have an account?
              <a href="{{ url('/signup') }}" class="text-green fw-bold">Register</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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


  const togglePassword = document.getElementById('eye-toggle-password');
  const passwordField = document.getElementById('password-field');

  togglePassword.addEventListener('click', () => {
    const type = passwordField.getAttribute('type') === "password" ? "text" : "password";

    passwordField.setAttribute('type', type);

    togglePassword.classList.toggle('bi-eye');
  });
</script>
@endsection