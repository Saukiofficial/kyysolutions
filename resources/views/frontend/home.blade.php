
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('kyysolutions')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


    @vite(['resources/js/app.js'])

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
</style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         <img src="{{ asset('frontend/img/logo.png') }}" alt="">
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu d-flex align-items-center justify-content-between">
        <ul>
          <li><a href="{{ route('home') }}" class="active"><i class="bi bi-house fs-5 me-2"></i> Beranda</a></li>
          <li><a href="{{ route('about') }}"><i class="bi bi-info-circle fs-5 me-2"></i> Tentang</a></li>
          <li><a href="{{ route('service') }}"><i class="bi bi-briefcase fs-5 me-2"></i> Pelayanan</a></li>
          <li><a href="{{ route('portfolio') }}"><i class="bi bi-image fs-5 me-2"></i> Portfolio</a></li>
          <li><a href="{{ route('team') }}"><i class="bi bi-people fs-5 me-2"></i> Team</a></li>
          <li><a href="{{ route('contact') }}"><i class="bi bi-envelope fs-5 me-2"></i> Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list fs-5"></i>
      </nav>


      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
   <section id="hero" class="hero section dark-background" style="width: 100%; min-height: 100vh; margin: 0; padding: 0; position: relative; overflow: hidden;">
  <div class="container text-center md-4" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center md-4">
      <div class="col-lg-8">
        <h2 id="typed-text"></h2>
        <p>Solusi Terbaik untuk Pengembangan Skill Anda</p>
        <a href="{{ route ('service') }}" class="btn-get-started" id="get-started-btn">Get Started</a>

<script>
  const getStartedBtn = document.getElementById('get-started-btn');

  getStartedBtn.addEventListener('mouseover', () => {
    getStartedBtn.style.transform = 'scale(1.1)';
    getStartedBtn.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.2)';
  });

  getStartedBtn.addEventListener('mouseout', () => {
    getStartedBtn.style.transform = 'scale(1)';
    getStartedBtn.style.boxShadow = 'none';
  });
</script>

<style>
  .btn-get-started {
    background-color: #020330;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .btn-get-started:hover {
    background-color: #7dc71d;
    color: #010111;
  }
</style>
      </div>
    </div>
  </div>
  <img src="{{ asset ('frontend/img/sementara.jpg') }}" alt="" data-aos="fade-in" style="width: 100%; height: 100vh; object-fit: cover; position: absolute; top: 0; left: 0;">
</section>

<script>
  const typedText = document.getElementById('typed-text');
  const textToType = 'Selamat Datang di KyySolutions';
  let index = 0;
  let speed = 50;

  function typeText() {
    if (index < textToType.length) {
      typedText.textContent += textToType.charAt(index);
      index++;
      setTimeout(typeText, speed);
    } else {
      setTimeout(function() {
        typedText.textContent = '';
        index = 0;
        typeText();
      }, 2000);
    }
  }

  typeText();
</script>
    <!-- /Hero Section -->
    <footer>
        <div class="container-fluid" style="background-color: #020330; width: 100vw; margin-left: calc(-50vw + 50%); bottom: 0; left: 0; z-index: 1000;">
          <div class="container copyright text-center p-4">
            <p> <span>Copyright</span> <strong class="px-1 sitename">KyySolutions</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
              Designed by <a href="#">Sauki Annaim</a>
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
