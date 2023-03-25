<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <style>
      body {
        background-image: url("<?php echo asset('/images/loginBg.jpg') ?>");
          
      }
      .login-side{
        background-image: url("<?php echo asset('/images/loginSide.png') ?>");

      }
      .login-side-text{
        background-image: url("<?php echo asset('/images/white.png') ?>");
      }
    </style>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/8180d0ebda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <div
      class="container w-100 d-flex align-items-center justify-content-center"
      style="height: 100vh"
    >
  <div class="main w-100 border border-5 rounded-3 overflow-hidden" style="height: 80%;">
        <div class="row text-center w-100" style="height: 100%">
          
          <div class="col-md-7 login-side-text">
            <br>
            <img src="{{ asset('images/profile.png') }}" alt="user" width="15%" />
            <div class="heading-1 fw-bold">STUDENT'S SIGN UP</div>
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="text" name="name" class="inp px-4" placeholder= "&#xf007;   Fareed Javed" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;" pattern="[a-zA-Z\s]+" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="email" name="email" class="inp px-4" placeholder= "&#xf0e0;   fareedjaved203@gmail.com" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="password" name="password" id="password" class="inp px-4" placeholder="&#xf023;   Aa12$789" style="font-family: 'Font Awesome 6 Free'; font-weight: 700; font-size: 12px;" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                        <br>
                        <!-- <a href="#" style="text-decoration: none; color: grey;"><p>Forgot Password?</p></a> -->
                    </div>
                </div>
                <div class="form-row" style="margin-top: 10px;">
                    <input type="file" name="file" id="file" style="display: none;" accept="image/jpeg, image/jpg, image/png" required>
                    <label for="file" class="img-upload"><i class="fa-solid fa-cloud-arrow-up fa-2x"></i> Upload Your Image</label>
                </div>
                <div class="form-row py-3">
                    <div class="col-md-12">
                        <input type="submit" class="btn1 btn1-2" value="Sign Up">
                    </div>
                </div>
            </form>
            <p class="d-block d-sm-none"><a href=" {{ url('/login') }}" style="color: grey;">Already Registered? Login Now</a></p>
        </div>
        <div
            class="col-md-5 login-side"
          >
            <h1 style="color: white;">Already Registered?</h1> <br>
            <p class="lead h5 text-light ">Login to unlock the golden door of freedom</p> <br>
            <a href="{{ url('/login') }}"><button class="btn1 btn2 ">Login</button></a>
          </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
