<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Result</title>
    <style>
      html{
        font-size: 62.5%;
      }
      .nav-item:hover {
        background-color: #64379f;
      }
      .navbar {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
      .nav-item {
        padding: 1.6rem;
        font-size: 1.9rem;
      }
      .navbar-brand {
        width: 50%;
      }
      .navbar-brand img {
        transform: scale(2.8);
        overflow: hidden;
      }
      .showcase {
        background-color: #64379f;
      }
      .showcase2 {
        background-color: white;
      }
      .img-section {
        max-width: 80% !important;
        position: absolute;
        top: 12%;
        left: 20%;
      }
      .player-holder {
        height: 250px;
        max-width: 550px;
        background: transparent;
        text-align: center;
      }
      .player-thumb {
        width: 220px;
        height: 220px;
        display: inline-block;
        border: 2px solid grey;
        border-radius: 50%;
        background-image: url("{{ asset('student/' . $student->image) }}");
        background-size: cover;
        background-position: center;
      }
      .enrollBtn {
        transform: translateY(2);
        margin-top: 20px;
        font-size: 1.5rem;;
      }
      .welcome{
          font-size: 4rem !important;
        }
      table{
        font-size: 1.8rem;
      }
      @media (max-width: 992px) and (min-width: 768px) {
        .img-section {
          position: absolute;
          top: 15%;
        }
      }
      @media (max-width: 992px) {
        .navbar-brand {
          margin: 10px 0 10px 30px;
        }
        .navbar-brand img {
          transform: scale(5);
        }
      }
      @media (max-width: 768px) {
        .welcome{
          font-size: 2.8rem !important;
        }
        .img-section {
          position: absolute;
          left: 0;
          max-width: 100% !important;
        }
        table{
        margin-top: 120px;
      }
      }
    </style>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/8180d0ebda.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #27104e"
    >
      <div class="container">
        <a class="navbar-brand" href=" url('/home') }}">
          <img src="{{ asset('images/logo.png') }}" width="10%" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="font-size: 2rem !important;"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/aboutus') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/contact') }}">Contact</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
    class="container-fluid showcase w-100 row"
    style="
      height: 180px;
      margin-right: 0 !important;
      margin-left: 0 !important;
    "
  ></div>
  <div
    class="container-fluid showcase2 w-100 row"
    style="
      height: 100px;
      margin-right: 0 !important;
      margin-left: 0 !important;
    "
  ></div>
  <div class="container img-section">
    <div class="row text-center">
      <div class="col-md-8">
        <p class="h1 mt-5 welcome" style="color: black;">
          Welcome, <span class="auto-type" style="color: black"></span>
          <div class="enrollBtn">
            <a href=" url('/home/courses') }}" class="enrollCourse"><button class="btn btn-success" style="font-size: 2rem;">Enroll Course</button> </a>
          </div>
        </p>
      </div>
      <div class="col-md-4">
        <div class="player-holder">
          <div class="player-thumb"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container bottom-container">
    <table class="table text-center" style="margin-bottom: 100px;">
      <thead>
        <tr>
          <th scope="col">COURSE</th>
          <th scope="col">Quiz 1 (/10)</th>
          <th scope="col">Quiz 2 (/10)</th>
          <th scope="col">Quiz 3 (/10)</th>
          <th scope="col">Quiz 4 (/10)</th>
          <th scope="col">Final (/50)</th>
          <th scope="col">GPA</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $data)
          <tr>
            <th scope="row">{{$data->title}}</th>
            <td>{{$data->quiz1}}</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="container text-center display-6"><b>CGPA:</b> -</div>
    
    
  </div>
  <footer
        class="text-center text-white mt-auto"
        style="background-color: #27104e"
      >
        <div class="container">
          <!-- Section: Logo -->
          <section class="d-flex">
            <!-- Left -->
            <div class="me-4">
            <img src="{{ asset('images/logoo.png') }}" alt="" style="position: relative; width: 180px; height: 150"/>
            </div>
          </section>
          <section>
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center">
              <!-- Grid column -->
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/home') }}" class="text-white"  style="font-size: 1.5rem; text-decoration:none;">Home</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/login') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >Student</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/Teacherlogin') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" 
                    >Lecturer</a
                  >
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/aboutus') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >About</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/contact') }}" class="text-white" style="font-size: 1.5rem; text-decoration:none;" >Contact</a>
                </h6>
              </div>
            </div>
          </section>
          <hr class="my-5" />

          <!-- >>>>>>>>>------ Links ------<<<<<<<< -->
          <section>
            <center>
              <div class="col-sm-5 col-md-4 col-lg-3">
                <ul class="list-inline mt-5">
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.facebook.com/') }}" 
                      ><i 
                        class="fa fa-facebook social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.twitter.com/') }}"
                      ><i
                        class="fa fa-twitter social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('/https://www.linkedin.com/') }}"
                      ><i
                        class="fa fa-linkedin social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.telegram.com/') }}"
                      ><i
                        class="fa fa-envelope social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="{{ url('https://www.github.com/') }}"
                      ><i
                        class="fa fa-github social-icon fa-2x"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </li>
                </ul>
              </div>
            </center>
          </section>
        </div>
        <div
          class="text-center p-2"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          <p class="text-white" style="font-size: 1.5rem; text-decoration:none;">&copy; 2023. All Rights Reserved</p>
        </div>
      </footer>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      let typed = new Typed(".auto-type", {
        strings: ["{{ $student->email }}", "{{ $student->name }}"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
      });
    </script>
  </body>
</html>
