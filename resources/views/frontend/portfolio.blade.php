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
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="url {'home'}" class="logo d-flex align-items-center me-auto me-xl-0">
         <img src="{{ asset('frontend/img/logo.png') }}" alt="">
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu ">
    <ul>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('service') }}">Services</a>
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

    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">WEBSITE</li>
            <li data-filter=".filter-product">MEDIA PEMBELAJARAN</li>
            <li data-filter=".filter-branding">GAME</li>
            <li data-filter=".filter-books">ASSET 3D</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/WEBSITE-SIP.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>website SIP</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/WEBSITE-SIP.jpg') }}" title="Website" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('portfolio-details') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset ('frontend/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/product-1.jpg') }}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/branding-1.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/books-1.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/BAROKAH.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>website -BarokahNet</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/BAROKAH.jpg') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('portfolio-details') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset ('frontend/img/portfolio/product-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/product-2.jpg') }}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/branding-2.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/books-2.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/app-3.jpg') }}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="{{ asset ('frontend/img/portfolio/product-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="portfolio-details.html" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="p" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/branding-3.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset ('frontend/img/portfolio/books-3.jpg') }}" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Lumia</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
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
