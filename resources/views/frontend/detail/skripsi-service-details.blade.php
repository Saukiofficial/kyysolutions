<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Service Details - KyySolutions</title>
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
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="frontend/img/logo.png" alt=""> -->
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
        <h1 class="mb-2 mb-lg-0">Service Skripsi Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Services List</h4>
              <div class="services-list">
                <a href="{{ route ('website-service-details') }}"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                <a href="{{ route ('game-service-details') }}"><i class="bi bi-arrow-right-circle"></i><span>Pembuatan Game</span></a>
                <a href="{{ route ('media-service-details') }}"><i class="bi bi-arrow-right-circle"></i><span>Media Pembelajaran</span></a>
                <a href="{{ route ('design-service-details') }}"><i class="bi bi-arrow-right-circle"></i><span>Design Grafis</span></a>
                <a href="{{ route ('asset3d-service-details') }}"><i class="bi bi-arrow-right-circle"></i><span>Asset 3D</span></a>
                <a href="{{ route ('skripsi-service-details') }}"class="active"><i class="bi bi-arrow-right-circle"></i><span>Skripsi</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="service-box">
              <h4>Download Catalog</h4>
              <div class="download-catalog">
                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
              </div>
            </div><!-- End Services List -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <img src="frontend/img/services.jpg" alt="" class="img-fluid services-img">
            <h3>Layanan Penulisan Skripsi Berkualitas</h3>
            <p>
             Di KySolutions, kami memahami betapa pentingnya skripsi dalam perjalanan akademik Anda. Kami menawarkan layanan penulisan skripsi yang membantu mahasiswa menghasilkan karya ilmiah yang berkualitas tinggi, sesuai dengan standar akademik, dan tepat waktu. Tim kami terdiri dari penulis berpengalaman yang ahli di berbagai bidang ilmu, siap membantu Anda menyelesaikan skripsi dengan hasil terbaik.
            </p>
            <b>Layanan Penulisan Skripsi Kami:</b>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Pemilihan Topik Skripsi.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Penyusunan Proposal Skripsi</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Penulisan Skripsi</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Analisis Data</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Review dan Revisi</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Penyusunan Daftar Pustaka</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Bimbingan dan Konsultasi</span></li>
            </ul>

            <b>Keunggulan Layanan Penulisan Skripsi KySolutions:</b>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Tim Penulis Profesional</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Kualitas Terjamin</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tepat Waktu</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Penulisan yang Orisinal</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Konsultasi yang Mudah</span></li>
            </ul>
            <b>Kenapa Memilih KySolutions untuk Skripsi Anda?</b><br><br>
            <p>
              Dengan pengalaman kami dalam dunia akademik dan keterampilan menulis yang mendalam, KySolutions adalah mitra yang tepat untuk membantu Anda menyelesaikan skripsi dengan kualitas terbaik. Kami berkomitmen untuk mendukung mahasiswa dalam mencapai tujuan akademik mereka dengan menyediakan layanan yang efisien, berkualitas, dan profesional.
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

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
