<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Espaebook</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.ico" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet">
  <!-- <link href="./assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
      <div>
          <ul>
            <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>{{ trans('welcome.Home') }}</span></a></li>
            <li><a href="#about"><i class="bx bx-user"></i> <span>{{ trans('welcome.About') }}</span></a></li>
            <li><a href="#skills"><i class="bx bxs-graduation"></i> <span>{{ trans('welcome.Skills') }}</span></a></li>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>{{ trans('welcome.Resume') }}</span></a></li>
            <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>{{ trans('welcome.Portfolio') }}</span></a></li>
            <li><a href="#testimonials"><i class="bx bxs-happy"></i> <span>{{ trans('welcome.Testimonials') }}</span></a></li>
            <li><a href="#contact"><i class="bx bxs-contact"></i> <span>{{ trans('welcome.Contact') }}</span></a></li>
          </ul>
      </div>
    </nav>
    <!-- .nav-menu -->


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">


    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <div class="social-links d-flex flex-row">
        <i class="bx bx-globe"></i>
        <h4><li class="ml-2"><a href="{{ url('lang', ['es']) }}">Es</a></li></h4>
        <h4><li><a href="{{ url('lang', ['en']) }}">En</a></li></h4>
      </div>


      <h1>Enrique Sanchez</h1>

      <p>{{ trans('welcome.I') }}<span class="typed" data-typed-items="{{ trans('welcome.Designer') }}, {{ trans('welcome.Developer') }}, Freelancer"></span></p>
      <div class="social-links">
        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
        <a href="https://www.instagram.com/espaebook" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://t.me/espaebook" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="https://www.linkedin.com/in/enrique-sanchez-espaebook" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://github.com/espaebook" class="github"><i class="bx bxl-github"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.About-me') }}</h2>
          <p>{{ trans('welcome.Profession-perfil') }}</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="./assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>{{ trans('welcome.Profession') }}</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.Birthday') }}:</strong> 12/Feb/1997</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.Phone') }}:</strong> (+58) 412 9802854</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.City') }}:</strong> Venezuela, caracas</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.Age') }}:</strong> 23</li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.Degree') }}:</strong></li>
                  <li><i class="icofont-rounded-right"></i> <strong>{{ trans('welcome.Freelance') }}:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p style="text-align: justify;">
              {{ trans('welcome.Profession-perfil-2') }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.Facts') }}</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">9</span>
              <p>{{ trans('welcome.Happy') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">13</span>
              <p>{{ trans('welcome.Projects') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">803</span>
              <p>{{ trans('welcome.Hours') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.Skills') }}</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="background-color: #ffc107;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap<i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>  

            <div class="progress">
              <span class="skill">{{ trans('welcome.language-en') }}<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="background-color: #ffc107;"></div>
              </div>
            </div>          

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="background-color: #ffc107;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>            

            <div class="progress">
              <span class="skill">{{ trans('welcome.language-es') }}<i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" ></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.Resume') }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">{{ trans('welcome.Education') }}</h3>
            <div class="resume-item">
              <h4>{{ trans('welcome.Education-1') }}</h4>
              <h5>2015 - {{ trans('welcome.Present') }}</h5>
              <p><em>{{ trans('welcome.Institute') }}</em></p>
              <p>{{ trans('welcome.Institute-text') }}</p>
            </div>
            <div class="resume-item">
              <h4>{{ trans('welcome.Education-2') }}</h4>
              <h5>2009 - 2013</h5>
              <p><em>{{ trans('welcome.Institute-2') }}</em></p>
              <p>{{ trans('welcome.Institute-text-2') }}</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">{{ trans('welcome.Professional-Experience') }}</h3>
            <div class="resume-item">
              <h4>Junior Training Development Specialist</h4>
              <h5>2018 - 2019</h5>
              <p><em>{{ trans('welcome.Professional-Experience-1-text') }}</em></p>
              <ul>
                <li>{{ trans('welcome.Professional-Experience-1-A') }}</li>
                <li>{{ trans('welcome.Professional-Experience-1-B') }}</li>
                <li>{{ trans('welcome.Professional-Experience-1-C') }}</li>
                <li>{{ trans('welcome.Professional-Experience-1-D') }}</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Marketing Digital</h4>
              <h5>2017 - 2019</h5>
              <p><em>{{ trans('welcome.Professional-Experience-1-text') }}</em></p>
              <ul>
                <li>{{ trans('welcome.Professional-Experience-2-A') }}</li>
                <li>{{ trans('welcome.Professional-Experience-2-B') }}</li>
                <li>{{ trans('welcome.Professional-Experience-2-D') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.Portfolio') }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{ trans('welcome.All') }}</li>
              <li data-filter=".filter-app">{{ trans('welcome.Design') }}</li>
              <li data-filter=".filter-dev">{{ trans('welcome.Developing') }}</li>
              <li data-filter=".filter-web">{{ trans('welcome.Web') }}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="./assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioDetailsGallery" class="venobox" title="">
              <div class="portfolio-wrap">
                <img src="./assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <!-- <h4>App 1</h4> -->
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="./assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioDetailsGallery" class="venobox" title="">            
              <div class="portfolio-wrap">
                <img src="./assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <!-- <h4>app 2</h4> -->
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="./assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioDetailsGallery" class="venobox" title="">
              <div class="portfolio-wrap">
                <img src="./assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" href="{{ url('/portfolio-details') }}">
                <div class="portfolio-info" >
                  <!-- <h4>App 3</h4> -->
                </div>
              </div>
            </a>
          </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <a href="./assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioDetailsGallery" class="venobox" title="">
                <div class="portfolio-wrap">
                  <img src="./assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" href="{{ url('/portfolio-details') }}">
                  <div class="portfolio-info" >
                      <h4>Energia Artesanal</h4> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-dev">
                <a href="./assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioDetailsGallery" class="venobox" title="">
                  <div class="portfolio-wrap">
                    <img src="./assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" href="{{ url('/portfolio-details') }}">
                    <div class="portfolio-info" >
                       <h4>Espaebook code</h4> 
                    </div>
                  </div>
                </a>
            </div>            
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ trans('welcome.Testimonials') }}</h2>
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active" id="hola">
              <div class="testimonial-item">
                <img src="./assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Frank López</h3>
                <h4>{{ trans('welcome.Testimonial-1-A') }}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ trans('welcome.Testimonial-1-B') }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="carousel-item">
              <div class="testimonial-item">
                <img src="./assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Germain Castillo</h3>
                  <h4>Community manager</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ trans('welcome.Testimonial-2-B') }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
              </div>            
            </div>

            <div class="carousel-item">
              <div class="testimonial-item">
                <img src="./assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>David Gómez</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ trans('welcome.Testimonial-3-B') }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>            
            </div>

            <div class="carousel-item">
              <div class="testimonial-item">
                <img src="./assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Román Ramos</h3>
                <h4>{{ trans('welcome.Testimonial-4-A') }}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ trans('welcome.Testimonial-4-B') }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>            
            </div>

            <div class="carousel-item">
              <div class="testimonial-item">
                <img src="./assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                <h3>Keiber Gordon</h3>
                <h4>{{ trans('welcome.Testimonial-5-A') }}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{ trans('welcome.Testimonial-5-B') }}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>            
            </div>
          


          </div>

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
          </ul>
        

        </div> 

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{ trans('welcome.Contact') }}</h2>
        </div>
        <div class="container">

          <div class="row">
            <div class="col-sm">
              <div class="info row justify-content-center">
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>Enriquehtm@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="info row justify-content-center">
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>{{ trans('welcome.Phone') }}:</h4>
                  <p>(+58) 412 9802854</p>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="info row justify-content-center">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>{{ trans('welcome.Location') }}:</h4>
                  <p>Venezuela, caracas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container" style="margin-right: 100px;">
      <h3>Enrique Sanchez</h3>
      <div class="Famous">
        <p>
          <i class="bx bxs-quote-alt-left"></i>
          {{ trans('welcome.Famous-phrase') }}
          <i class="bx bxs-quote-alt-right"></i>
        </p>
      </div>
      <div class="Famous-phrase">
        <p>
        {{ trans('welcome.Famous-phrase-2') }}
        </p>   
      </div>

      <div class="social-links">
        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
        <a href="https://www.instagram.com/espaebook" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://t.me/espaebook" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="https://www.linkedin.com/in/enrique-sanchez-espaebook" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://github.com/espaebook" class="github"><i class="bx bxl-github"></i></a>      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="./assets/vendor/php-email-form/validate.js"></script> -->
  <script src="./assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="./assets/vendor/counterup/counterup.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/venobox/venobox.min.js"></script>
  <!-- <script src="./assets/vendor/owl.carousel/owl.carousel.js"></script> -->
  <script src="./assets/vendor/typed.js/typed.min.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

</body>

</html>