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
        <a href="{{ route('team') }}"class="active">Team</a>
        <a href="{{ route('contact') }}">Contact</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      </div>

    </div>
  </header>
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background d-flex align-items-center justify-content-center">
  <img src="frontend/img/sementara.jpg" alt="" data-aos="fade-in" class="img-fluid w-100">


  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <h2 class="display-3">Team</h2>
      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->
  <main class="main">
    <!-- Team Section -->
    <section class="team-15 team section" id="team">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
   <div class="box team-description">
  <p class="description">Perkenalkan para profesional di balik KYY Solutions - tempat dimana kreativitas bertemu teknologi. Tim kami terdiri dari web developer yang inovatif, desainer grafis yang kreatif, pengembang media pembelajaran dan game edukasi yang berpengalaman, serta konsultan akademis yang siap membantu perjalanan pendidikan Anda. Bersama-sama, kami berkomitmen menghadirkan solusi digital yang tidak hanya fungsional, tetapi juga bermakna.</p>
</div>
      </div><!-- End Section Title -->

      <div class="content" style="text-align: center;">
  <div class="container " style="display: inline-block; text-align: left;">

    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="person">
          <figure>
            <img src="{{ asset ('frontend/img/team/Sauki.png') }}" alt="Image" class="img-fluid">
            <div class="social">
              <a href="https://www.tiktok.com/@kyy_solutions?"><span class="bi bi-tiktok"></span></a>
              <a href="https://www.instagram.com/saukialvaro/profile?"><span class="bi bi-instagram"></span></a>
              <a href="{{ route ('sauki') }}"><span class="bi bi-person-standing""></span></a>
            </div>
          </figure>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="person">
          <figure>
            <img src="{{ asset ('frontend/img/team/Luluk.png') }}" alt="Image" class="img-fluid">
            <div class="social">
            <a href="#"><span class="bi bi-tiktok"></span></a>
              <a href="#"><span class="bi bi-instagram"></span></a>
              <a href="{{ route ('luluk') }}"><span class="bi bi-person-standing""></span></a>
            </div>
          </figure>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="person">
          <figure>
            <img src="{{ asset ('frontend/img/team/Dimas.png') }}" alt="Image" class="img-fluid">
            <div class="social">
              <a href="#"><span class="bi bi-tiktok"></span></a>
              <a href="#"><span class="bi bi-instagram"></span></a>
              <a href="{{ route ('Dimas') }}"><span class="bi bi-person-standing""></span></a>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </div>
</div>

    </section><!-- /Team Section -->

    <section id="skills" class="skills section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row skills-content skills-animation">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><i class="bi bi-html5"></i> <span>HTML</span> <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><i class="bi bi-css3"></i> <span>CSS</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><i class="bi bi-js"></i> <span>JavaScript</span> <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><i class="bi bi-php"></i> <span>PHP</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><i class="bi bi-wordpress"></i> <span>WordPress/CMS</span> <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><i class="bi bi-unity"></i> <span>Unity Hub</span> <i class="val">85%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

    </div>

  </div>

  </main>
<footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="frontend/img/logo.png" alt="Logo" class="img-fluid">
            <span class="sitename">KyySolutions</span>
          </a>
       <p>Sebagai penyedia jasa pembuatan website dan media game, kami menawarkan solusi terbaik untuk kebutuhan digital Anda. Dengan pengalaman dan keahlian yang mumpuni, kami dapat membantu Anda menciptakan website yang profesional dan efektif, serta media game yang menarik dan interaktif. Kami berkomitmen untuk memberikan hasil yang berkualitas tinggi dan memuaskan kebutuhan Anda.</p>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Navbar Menu</h4>
          <ul>
            <li><a href="{{ Route('home') }}">Home</a></li>
            <li><a href="{{ ('about') }}">Tentang</a></li>
            <li><a href="{{ ('service') }}">Services</a></li>
            <li><a href="{{ ('portfolio') }}">Portfolio</a></li>
            <li><a href="{{ ('team') }}">Team</a></li>
            <li><a href="{{ ('contact') }}">contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="{{ route ('website-service-details') }}">Pembuatan Website</a></li>
              <li><a href="{{ route ('game-service-details') }}">Pembutan Game</a></li>
              <li><a href="{{ route ('media-service-details') }}">Media Pembelajaran</a></li>
              <li><a href="{{ route ('asset3d-service-details') }}">Design Grafis</a></li>
              <li><a href="{{ route ('asset3d-service-details') }}">Asset 3D</a></li>
              <li><a href="{{ route ('skripsi-service-details') }}">Skripsi</a></li>
            </ul>
          </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>KyySolutions</p>
          <p>Sumenep,Madura,JawaTimur,No.hp 081232916758</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>081232916758</span></p>
          <p><strong>Email:</strong> <span>kyysolutions17@gmail.com</span></p>
        </div>

      </div>
    </div>

    <footer>
        <div class="container-fluid" style="background-color: #020330; width: 100vw; margin-left: calc(-50vw + 50%); bottom: 0; left: 0; z-index: 1000;">
          <div class="container copyright text-center p-4">
            <p> <span>Copyright</span> <strong class="px-1 sitename">KyySolutions</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
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
