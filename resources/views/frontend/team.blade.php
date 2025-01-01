<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KyySolutions</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png')}}" rel="icon">
  <link href="{{ asset ('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset ('frontend/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KyySolutions
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  ======================================================== -->
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         <img src="{{ asset('frontend/img/logo.png') }}" alt="">
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu ">
    <ul>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('about') }}">Tentang</a>
        <a href="{{ route('service') }}">Pelayanan</a>
        <a href="{{ route('portfolio') }}">Portfolio</a>
        <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('contact') }}">Contact</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      </div>

    </div>
  </header>

  <main class="main">
    <!-- Team Section -->
    <section class="team-15 team section" id="team">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Perkenalkan para profesional di balik KYY Solutions - tempat dimana kreativitas bertemu teknologi. Tim kami terdiri dari web developer yang inovatif, desainer grafis yang kreatif, pengembang media pembelajaran dan game edukasi yang berpengalaman, serta konsultan akademis yang siap membantu perjalanan pendidikan Anda. Bersama-sama, kami berkomitmen menghadirkan solusi digital yang tidak hanya fungsional, tetapi juga bermakna. velit</p>
      </div><!-- End Section Title -->

      <div class="content">
        <div class="container">

          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="{{ asset ('frontend/img/team/sauki.jpg') }}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="https://www.tiktok.com/@kyy_solutions?"><span class="bi bi-tiktok"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                    <a href="#"><span class="bi bi-github"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Sauki Anna'im</h3>
                  <span class="position">Web Development</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="{{ asset ('frontend/img/team/luluk.jpg') }}" alt="Image" class="img-fluid">
                  <div class="social">
                  <a href="#"><span class="bi bi-tiktok"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                    <a href="#"><span class="bi bi-github"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Luluk Kusfiah</h3>
                  <span class="position">konsultan akademik</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="{{ asset ('frontend/img/team/team-3.jpg') }}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-twitter-x"></span></a>
                    <a href="#"><span class="bi bi-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Evan Smith</h3>
                  <span class="position">Content</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="{{ asset ('frontend/img/team/team-4.jpg') }}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-twitter-x"></span></a>
                    <a href="#"><span class="bi bi-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Kaylie Jones</h3>
                  <span class="position">Accountant</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Team Section -->

    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

        <div class="progress">
          <span class="skill"><i class="bi bi-css3"></i> <span>CSS</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
      </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

        <div class="progress">
          <span class="skill"><i class="bi bi-php"></i> <span>PHP</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<div class="container-fluid bg-primary py-4" style="background-color: #060e46; width: 100vw; margin-left: calc(-50vw + 50%);">
  <div class="container copyright text-center">
    <p> <span>Copyright</span> <strong class="px-1 sitename">KyySolutions</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</div>
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset ('frontend/js/main.js') }}"></script>

</body>

</html>
