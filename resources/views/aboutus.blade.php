<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <style>
        body{
            background-image: url("<?php echo asset('/images/aboutback.jpg') ?>");
        }
        .about-section{
            background-image: url("<?php echo asset('/images/about.jpg') ?>");
        }
        .wrapper1{
            background-image: url("<?php echo asset('/images/teacherAbout.png') ?>");
        }
    </style>
    <title>About Us</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="about-section">
        <div class="inner-contaainer">
            <center>
                <h1>CINTEX PORTAL</h1>
                <h1>About Us</h1>
            </center>
            <br>
            <p class="text">
                Welcome to Cintex Portal, your one-stop destination for high-quality online education. We believe in the power of knowledge and strive to provide accessible, affordable, and engaging learning opportunities for learners of all ages and backgrounds.
                <br><br>
                Our team of expert educators and instructional designers have developed a wide range of courses and resources covering a variety of subjects, from mathematics and science to language learning and the arts. All of our courses are designed to be interactive and engaging, using the latest in educational technology to provide a dynamic learning experience.<br>
                <br>
                We are committed to creating a supportive and inclusive community for our learners, and offer a range of resources and services to help you succeed in your studies. Our dedicated support team is always available to assist you with any questions or concerns you may have.<br><br>
                
                Thank you for choosing Educational Portal. We hope to be a valuable resource for your learning journey.
            </p> 
        </div>
        <div class="btnn">
            <a href="{{ url('/adminDashboard') }}">Back</a>
        </div>
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
</body>
</html>