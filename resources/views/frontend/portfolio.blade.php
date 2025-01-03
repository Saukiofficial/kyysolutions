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
        <a href="{{ route('portfolio') }}"class="active">Portfolio</a>
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
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background d-flex align-items-center justify-content-center">
  <img src="frontend/img/sementara.jpg" alt="" data-aos="fade-in" class="img-fluid w-100">


  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <h2 class="display-3">Portfolio</h2>
      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->

  <main class="main">

    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">SEMUA</li>
            <li data-filter=".filter-app">WEBSITE</li>
            <li data-filter=".filter-product">MEDIA PEMBELAJARAN</li>
            <li data-filter=".filter-branding">GAME</li>
            <li data-filter=".filter-books">ASSET 3D</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/website/ibs/ibs-utama.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>website-Invertaris Barang Sekolah</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/website/ibs/ibs-utama.png') }}" title="Website" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('ibs-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="{{ asset ('frontend/img/portfolio/media/media-kerapansapi.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Media-KERAPAN SAPI</h4>
                  <p>Klik tanda (+)Untuk melihatnya </p>
                  <a href="{{ asset ('frontend/img/portfolio/video/Puzzle.mp4') }}" title="Media-Puzzle Game" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route ('karapan_sapi-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            <!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/game/game-1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Game-Puzzle</h4>
                <p>klik tanda (+) Untuk melihatnya</p>
                <a href="{{ asset ('frontend/img/portfolio/video/Puzzle.mp4') }}" title="Puzzle" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('puzzle-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/asset/3D Hukum Newton.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asset-Hukum Newton</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/asset/3D Hukum Newton.png') }}" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('asset_newton-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/website/ketuntasan/ketuntasan-utama.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>website -Ketuntasan</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/website/ketuntasan/ketuntasan-utama.png') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('ketuntasan-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset ('frontend/img/portfolio/media/media-1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Media-Hukum Newton</h4>
                <p>Klik Tanda (+) Untuk melihatnya</p>
                <a href="{{ asset ('frontend/img/portfolio/video/Virtual_Fiber_Optic.mp4') }}" title="Virtual Lab" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('hukum_newton-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/game/game-3.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Game-Konsleting Listrik</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/game/game-3.png') }}" title="konsleting" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('konsleting_listrik-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/asset/3D Karapan Sapi.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asset-Karapan Sapi</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/asset/3D Karapan Sapi.png') }}" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('asset_sapi-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/website/ketosin/ketosin-utama.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Website-Ketosin</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/website/ketosin/ketosin-utama.png') }}" title="ketosin-web" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('ketosin-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="{{ asset ('frontend/img/portfolio/media/media-2.png') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Media-ES-MR</h4>
                  <p>Klik Tanda (+) Untuk melihatnya</p>
                  <a href="{{ asset ('frontend/img/portfolio/video/ES-MR.mp4') }}" title="ES-MR" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route ('es-mr-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>

              </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/game/game-2.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Game-Virtual Lab</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/game/game.png') }}" title="Virtual Lab" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('virtual_lab-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/asset/3D Konsep Gaya.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asset- 3D Konsep Gaya</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/asset/3D Konsep Gaya.png') }}" title="virtual lab" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('asset_konsep_gaya-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
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
