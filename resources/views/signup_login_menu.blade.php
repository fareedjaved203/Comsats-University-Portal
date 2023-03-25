<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Access Page</title>
    <link href="{{ asset('css/signup_login_menu.css') }}" rel="stylesheet">
    <style>
      body{
        
        background-image: url("{{ asset('images/access_page_bg3.jpg') }}");
      }
    </style>
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/8180d0ebda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div
      class="container-fluid main d-flex align-items-center justify-content-center"
    >
      <div
        class="container child px-4 d-flex align-items-center justify-content-center"
      >
      <fieldset class="border rounded-3 p-4" style="border: 3px solid #27104e !important;">
        <legend class="float-none"><img src="{{ asset('images/logo.png') }}" alt="" width="15%"><span>STUDENT EDUCATION PORTAL</span></legend>
        <div
          class="row gx-5 child2 d-flex align-items-center justify-content-center"
        >
          <div
            class="col-md-6 child2 d-flex align-items-center justify-content-center"
          >
          <a href=" {{ url('/Teacherlogin') }}" class="d-flex align-items-center justify-content-center">
            <div
              class="p-3 selection_body text-light text-center rounded d-flex align-items-center justify-content-center">
            <div class="row d-flex align-items-center justify-content-center">
              <div class="col">
                <i class="fa-solid fa-user-tie fa-3x" style="color: white;"></i>
              </div>
              <div class="mt-2">LECTURER</div>
            </div>
        </div>
      </a>
          </div>
          <div
            class="col-md-6 child2 d-flex align-items-center justify-content-center"
          >
          <a href=" {{ url('/login') }}" class="d-flex align-items-center justify-content-center second">
            <div class="p-3 selection_body text-light text-center rounded d-flex align-items-center justify-content-center">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col">
                  <i class="fa-solid fa-child fa-3x" style="color: white"></i>
                </div>
                <div class="mt-2">STUDENT</div>
              </div>
          </div>
        </a>
            </div>
          
          </div>
        </fieldset>
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
