<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="wrapper">
        <div class="footer">
            <div class="cont">
                <div class="foooter-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d212327.9243030411!2d72.50650423281252!3d33.7445424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scomsats%20islamabad!5e0!3m2!1sen!2s!4v1671900449276!5m2!1sen!2s" width="100%" height="100%
                                " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-text">
                                <h1>Contact Us</h1>
                                <p>
                                    Welcome to our contact us page! We value your feedback and suggestions and are here to help with any questions or concerns you may have. Please use the form provided to send us a message and we will get back to you as soon as possible.
                                    Thank you for choosing Educational Portal for your learning needs.
                                </p>
    
                                <h2>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                      &nbsp; Address
                                </h2>
                                <p>
                                    COMSATS University Islamabad, Park Road,
                                    Tarlai Kalan, Islamabad 45550, Pakistan 
                                </p>
    
                                <h2>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> 
                                      &nbsp; Email
                                </h2>
                                <p>
                                    kainatmudassar@comsats.edu.pk
                                </p>
    
                                <h2>
                                    <i class="fa fa-phone-square" aria-hidden="true"></i> 
                                      &nbsp; Phone
                                </h2>
                                <p>
                                    555-555-5555 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-mein">
            <div class="cont">
                <div class="row">
                    <div class="col-md-5">
                        <div class="footer-social">
                            <h3>
                                Be the first to contact us 
                            </h3>
                            <h3><span>Sign up for our newsletter to receive updates of news and events.                            </span></h3>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="social-innar">
                            <ul>
                                <form>
                                    <li>
                                        <input type="text" class="form-style" name="email" placeholder="Enter your email" >
                                    </li>

    
                                    <li>
                                    <button type="submit"><i class="fa fa-arrow-right"></i></button>
                                    </li>
                                </form>
                                
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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