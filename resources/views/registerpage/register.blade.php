@extends('../maintemplate')

<style>
  .registration-section {
    position: relative;
    background: url('images/bg_1.jpg') no-repeat center center fixed;
    background-size: cover;
    transition: background-image 1s ease-in-out;
  }

  .registration-section.bg2 {
    background-image: url('images/bg_2.jpg');
  }

  .two-forms {
    display: flex;
    gap: 10px;
  }

  .customm-button {
        background-color: lightblue;
        border: 2000px;
        border-radius: 2000px;
        padding: 10px 205px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .custom-button.bttn.bttn-lg {
        padding: 20px 40px; 
        font-size: 20px;
    }
    
  .inputt-box:hover, .inputt-box:focus {
    background: rgba(255, 255, 255, 0.25);
  }

  ::-webkit-input-placeholder {
    color: white;
  }

  .inputt-box-field {
    position: relative;
    top: -35px;
    left: 17px;
    color: white;
  }

  .inputt-box {
    font-size: 15px;
    font-weight: 500;
    color: black;
    margin-bottom:24px;
    height: 50px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: white;
    cursor: pointer;
    transition: .3s ease-in-out;
    padding-left:10px;
  }

  .submitt {
    font-size: 15px;
    font-weight: 500;
    color: black;
    height: 45px;
    width: 100%;
    border: none;
    border-radius: 30px;
    outline: none;
    background: white;
    cursor: pointer;
    transition: .3s ease-in-out;
  }

  .submitt:hover {
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
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


<section class="h-100 h-custom gradient-custom-2 registration-section">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-5">
      <h2 style="color: white; font-size: 30px; text-align: center; padding: 10px 0 30px 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Sign Up</h2>
        <div class="two-forms">
          <input type="text" class="inputt-box" id="inputan-field" placeholder="Firstname" style="padding-right: 10px;" />
          
          <input type="text" class="inputt-box" id="inputan-field" placeholder="Lastname" style="padding-left: 10px;" />
         
        </div>

        <div class="form-outline">
          <input type="text" class="inputt-box" id="alamat-field" placeholder="Alamat" />
        </div>

        <div class="form-outline">
          <input type="text" class="inputt-box" id="noTelp-field" placeholder="Nomor Telepon" />
        </div>

        <div class="form-outline">
          <input type="text" class="inputt-box" id="email-field" placeholder="Email" />
        </div>

        <div class="form-outline">
          <input type="text" class="inputt-box" id="password-field" placeholder="Password" />
        </div>

        <button class="customm-button bttn bttn-lg" type="submit">Login</button>

      </div>
    </div>
  </div>
</section>


