<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - KyySolutions Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="frontend/img/favicon.png" rel="icon">
  <link href="frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="frontend/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KyySolutions
  * Template URL: https://bootstrapmade.com/KyySolutions-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         <img src="{{ asset ('frontend/img/logo.png') }}" alt="Logo" class="img-fluid">
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu">
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

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details Hukum Newton</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="frontend/img/portfolio/media/media-1.png" alt="">
            </div>

            {{--  <div class="swiper-slide">
              <img src="frontend/img/portfolio/product-1.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="frontend/img/portfolio/branding-1.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="frontend/img/portfolio/books-1.jpg" alt="">
            </div>  --}}

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Media Pembelajaran - Hukum Newton</h2>
              <p>
                Produk ini adalah aplikasi media pembelajaran inovatif berbasis Augmented Reality (AR) yang dirancang untuk membantu siswa memahami dan meningkatkan keterampilan numerasi pada materi Hukum Newton
              </p>
              <p>
                Aplikasi ini memanfaatkan pendekatan Multiple Representasi untuk memberikan pengalaman belajar yang mendalam dan interaktif. Aplikasi ini memungkinkan siswa memvisualisasikan konsep-konsep abstrak dalam Hukum Newton melalui berbagai representasi seperti visual, grafis, dan matematis, dengan bantuan teknologi AR yang dapat diakses melalui perangkat Android
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pengguna dapat memvisualisasikan simulasi langsung tentang bagaimana gaya, massa, dan percepatan berinteraksi sesuai dengan Hukum Newton dengan bantuan teknologi AR memungkinkan siswa melihat eksperimen fisika virtual, seperti benda yang didorong atau ditarik, serta pengaruh gaya gesek atau gravitasi yang dikaitkan dengan kejadian di kehidupan sehari-hari.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="frontend/img/testimonials/Dimas.png" class="testimonial-img" alt="">
                  <h3>Dimas</h3>
                  <h4>Game Development</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> Media Pembelajaran</li>
                <li><strong>Client</strong> Skripsi</li>
                <li><strong>Sistem Operasi</strong> Android</li>
                <li><strong>Kapasitas</strong>198 Mb</li>
                <li><strong>Project date</strong> 08 Agustus, 2022</li>
                <li><strong>Software Pengembang</strong>Unity 2021, Blender 3D, CorelDraw, Photoshop CS6</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

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
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/vendor/php-email-form/validate.js"></script>
  <script src="frontend/vendor/aos/aos.js"></script>
  <script src="frontend/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="frontend/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="frontend/js/main.js"></script>

</body>

</html>
