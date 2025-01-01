
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
  * Template Name: kyysolutions
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .tool-icon {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
    }

    .language-icon {
        width: 50px;
        height: 50px;
        margin: 10px;
    }

    .hero-section {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('frontend/img/detail-team/img-tools/dokumen.jpg');
        background-size: cover;
        color: white;
        padding: 100px 0;
    }

    .dark-section {
        background-color: #1a1a1a;
        color: white;
        padding: 40px 0;
    }

    .experience-card {
        background-color: #2a2a2a;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>

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
    <body>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('frontend/img/detail-team/img-tools/Sauki1.png') }}" class="img-fluid rounded-circle mb-3" alt="Profile">
                    </div>
                   <div class="col-md-8">
    <h1 class="display-4" style="color: white; font-weight: bold;">WEB DEVELOPMENT</h1>
    <h2 style="color: white; font-weight: bold;">SAUKI ANNAIM</h2>
    <p class="lead" style="color: white; font-weight: bold;">"FULL STACK WEB DEVELOPMENT"</p>
</div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="dark-section">
            <div class="container">
                <h2 class="mb-4" style="color: white;">About Me</h2>
                <div class="experience-card">
                    <p>Saya Sauki Annaim, seorang IT Programmer dan owner dari startup KyySolutions, yang bergerak di bidang jasa pembuatan website. Dengan pengalaman sebagai IT Remote pada bidang pengembangan website di salah satu perusahaan swasta, saya memiliki keahlian dalam membangun dan mengembangkan aplikasi berbasis web menggunakan bahasa pemrograman seperti PHP, JavaScript, dan Python. Komitmen saya adalah memberikan solusi teknologi yang efektif dan inovatif untuk mendukung kebutuhan bisnis klien</p>
                </div>
            </div>
        </section>

        <!-- Tools Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="mb-4">TOOLS</h2>
                <div class="row">
                    <div class="col-3 col-md-2 text-center">
                        <img src="{{ asset('frontend/img/detail-team/tools/vscode.jpg') }}" class="tool-icon" alt="vscode">
                        <p class="mt-2">vscode</p>
                    </div>
                    <div class="col-3 col-md-2 text-center">
                        <img src="{{ asset('frontend/img/detail-team/tools/mysql.jpg') }}" class="tool-icon" alt="vscode">
                        <p class="mt-2">laragon</p>
                    </div>
                    <div class="col-3 col-md-2 text-center">
                        <img src="{{ asset('frontend/img/detail-team/tools/laragon.jpg') }}" class="tool-icon" alt="vscode">
                        <p class="mt-2">mysql</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Languages Section -->
        <section class="dark-section">
            <div class="container">
                <h2 class="mb-4" style="color: white;">Language</h2>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex flex-wrap justify-content-center">
                            <img src="{{ asset('frontend/img/detail-team/img-tools/python.png') }}" class="language-icon" alt="Python">
                            <img src="{{ asset('frontend/img/detail-team/img-tools/html.png') }}" class="language-icon" alt="HTML">
                            <img src="{{ asset('frontend/img/detail-team/img-tools/css.png') }}" class="language-icon" alt="CSS">
                            <img src="{{ asset('frontend/img/detail-team/img-tools/javascript.png') }}" class="language-icon" alt="JavaScript">
                            <img src="{{ asset('frontend/img/detail-team/img-tools/php.png') }}" class="language-icon" alt="php">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Media Section -->
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    </section><!-- /Contact Section -->

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
