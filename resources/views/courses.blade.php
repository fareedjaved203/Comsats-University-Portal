<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .nav-item:hover {
        background-color: #64379f;
      }
      .navbar {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
      .nav-item {
        padding: 1rem;
        font-size: 1.2rem;
      }
      .navbar-brand {
        width: 50%;
      }
      .navbar-brand img {
        transform: scale(2.8);
        overflow: hidden;
      }
      
      @media (max-width: 992px) {
        .navbar-brand {
          margin: 10px 0 10px 30px;
        }
        .navbar-brand img {
          transform: scale(5);
        }
      }
    </style>
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
    <title>Courses</title>
  </head>
  <body id="courses" class="d-flex flex-column min-vh-100">
  <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #27104e"
    >
      <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
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
    <div class="container">
      <div class="container">
        <div
          class="display-6 text-center text-light mt-5"
          style="background-color: #27104e"
        >
          All Available Courses
        </div>
        <div class="container px-4 py-4 text-center">
          <div class="row gx-4">
            @foreach ($data as $course)
            <div class="col-md-4 p-2">
              <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="width: 18rem">
                
                  <img
                    src="{{ asset('course/' . $course->image) }}"
                    class="card-img-top"
                    alt="{{$course->title}}"
                  />
                  <div class="card-body">
                    <h5 class="card-title">{{$course->title}}</h5>
                    <h5 class="card-title" style="display: none;">{{$course->id}}</h5>
                    <p class="card-text">
                      {{$course->description}}
                    </p>
                    <button
                      class="btn"
                      id="Btn"
                      style="background-color: #27104e"
                    >
                      Enroll Course
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>

        </div>
      </div>
    </div>
    <footer
        class="text-center text-white mt-auto"
        style="background-color: #27104e"
      >
        <div class="container">
        <input type="hidden" id="title-id" value="">
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
                  <a href="{{ url('/home') }}" class="text-white"  style="font-size: 1rem; text-decoration:none;">Home</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/login') }}" class="text-white" style="font-size: 1rem; text-decoration:none;" >Student</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/Teacherlogin') }}" class="text-white" style="font-size: 1rem; text-decoration:none;" 
                    >Lecturer</a
                  >
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/aboutus') }}" class="text-white" style="font-size: 1rem; text-decoration:none;" >About</a>
                </h6>
              </div>
              <div class="col-md-1">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="{{ url('/contact') }}" class="text-white" style="font-size: 1rem; text-decoration:none;" >Contact</a>
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
          <p class="text-white" style="font-size: 1rem; text-decoration:none;">&copy; 2023. All Rights Reserved</p>
        </div>
      </footer>
      
    <script src="{{ asset('js/course.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
