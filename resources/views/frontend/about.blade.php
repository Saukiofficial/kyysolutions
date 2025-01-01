
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

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         <img src="{{ asset('frontend/img/logo.png') }}" alt="">
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu ">
       <ul>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('about') }}"class="active">Tentang</a>
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
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background d-flex align-items-center justify-content-center">
  <img src="frontend/img/services.jpg" alt="" data-aos="fade-in" class="img-fluid w-100">


  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <h2 class="display-3">Tentang Kami</h2>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

  <main class="main">
  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Tentang Kami</h2>
      <p>Selamat datang di Kyyolutions - Mitra Digital Anda untuk Solusi Kreatif dan Edukatif
        KyySolutions adalah perusahaan teknologi kreatif yang berkomitmen untuk menghadirkan solusi digital berkualitas tinggi. Didirikan dengan visi untuk memadukan teknologi, kreativitas, dan pendidikan, kami hadir untuk membantu klien kami mencapai kesuksesan di era digital.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-3">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset ('frontend/img/favicon.png') }}" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="about-content ps-0 ps-lg-3">
            <h3>Visi Misi Kami</h3>
            <p class="fst-italic">
                Kami berkomitmen untuk menjadi mitra terpercaya dalam menghadirkan solusi digital yang inovatif dan edukatif. Melalui layanan kami, kami bertekad untuk mendorong transformasi digital dalam dunia pendidikan, menghadirkan inovasi berkelanjutan, dan memberikan layanan profesional yang selalu berfokus pada kepuasan klien. Kami percaya bahwa setiap proyek adalah kesempatan untuk menciptakan dampak positif dan memberikan nilai tambah bagi kesuksesan klien kami.
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h4>Mengembangkan Teknologi</h4>
                  <p>Kami berfokus pada pengembangan teknologi yang inovatif dan berdampak positif bagi masyarakat.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h4>Meningkatkan Kualitas Hidup</h4>
                  <p>Kami berkomitmen untuk meningkatkan kualitas hidup masyarakat melalui produk dan layanan kami.</p>
                </div>
              </li>
            </ul>
            <p>
              Kami percaya bahwa teknologi dapat menjadi solusi bagi berbagai masalah yang dihadapi masyarakat. Oleh karena itu, kami berkomitmen untuk mengembangkan teknologi yang inovatif dan berdampak positif bagi masyarakat.
            </p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- /About Section -->
</main>

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