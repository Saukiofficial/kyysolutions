<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KyySolutions - Portfolio</title>
  <meta name="description" content="Portfolio of KyySolutions showcasing web development, learning media, games, and 3D assets.">
  <meta name="keywords" content="web development, game design, 3d assets, learning media, portfolio">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png')}}" rel="icon">
  <link href="{{ asset ('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File (Pastikan dinonaktifkan untuk menghindari konflik) -->
  {{-- <link href="{{ asset ('frontend/css/main.css') }}" rel="stylesheet"> --}}

  <style>
    /*--------------------------------------------------------------
    # Desain Kustom Sesuai Spesifikasi
    --------------------------------------------------------------*/

    /* 1. Variabel & Gaya Dasar */
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
      --dark-background: #0a0a0f;
      --card-background: rgba(255, 255, 255, 0.05);
      --text-primary: #ffffff;
      --text-secondary: rgba(255, 255, 255, 0.7);
      --accent-blue: #3b82f6;
      --accent-purple: #8b5cf6;
      --accent-green: #10b981;
      --border-color: rgba(255, 255, 255, 0.1);

      --font-primary: 'Inter', sans-serif;
      --font-heading: 'Space Grotesk', sans-serif;

      --spacing-sm: 1rem;
      --spacing-md: 2rem;
      --spacing-lg: 3rem;
      --spacing-xl: 5rem;
    }

    body {
      background-color: var(--dark-background);
      color: var(--text-primary);
      font-family: var(--font-primary);
      overflow-x: hidden; /* Mencegah scroll horizontal */
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-heading);
      color: var(--text-primary);
      font-weight: 700;
    }

    a {
      color: var(--accent-purple);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    a:hover {
      color: var(--text-primary);
    }

    .section {
        padding: var(--spacing-lg) 0;
        overflow: hidden;
    }

    .container, .container-fluid {
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    /* 2. Latar Belakang Partikel Mengambang */
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1;
      background-color: var(--dark-background);
    }

    /* 3. Header */
    .header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1030;
      background: rgba(10, 10, 15, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--border-color);
      padding: var(--spacing-sm) 0;
      transition: all 0.3s ease;
    }

    .header .logo h1.sitename {
      font-family: var(--font-heading);
      color: var(--text-primary);
      font-weight: 700;
    }

    .navmenu ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navmenu li a {
      color: var(--text-secondary);
      padding: 10px 15px;
      font-weight: 500;
      position: relative;
    }

    .navmenu li a:hover,
    .navmenu li a.active {
      color: var(--text-primary);
    }

    .navmenu li a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 15px;
        right: 15px;
        height: 2px;
        background: var(--primary-gradient);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .navmenu li a:hover::after,
    .navmenu li a.active::after {
        transform: scaleX(1);
    }

    .header-social-links a {
        color: var(--text-secondary);
        margin-left: 1rem;
    }
    .header-social-links a:hover {
        color: var(--text-primary);
    }

    /* 4. Hero Section */
    .hero {
      height: 60vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(ellipse at center, rgba(10, 10, 15, 0.1) 0%, var(--dark-background) 80%);
        z-index: 1;
    }

    .hero .container {
        position: relative;
        z-index: 2;
    }

    .hero h2 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .typing-cursor {
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }

    /* 5. Portfolio Section */
    .portfolio .portfolio-filters {
      padding: 0;
      margin: 0 auto var(--spacing-md) auto;
      list-style: none;
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    .portfolio .portfolio-filters li {
      cursor: pointer;
      display: inline-block;
      padding: 12px 25px;
      font-size: 14px;
      font-weight: 600;
      line-height: 1;
      text-transform: uppercase;
      color: var(--text-secondary);
      margin: 0;
      border: 1px solid var(--border-color);
      border-radius: 50px;
      transition: all 0.3s ease-in-out;
    }

    .portfolio .portfolio-filters li:hover,
    .portfolio .portfolio-filters li.filter-active {
      color: var(--text-primary);
      background: var(--primary-gradient);
      border-color: transparent;
      box-shadow: 0 5px 15px rgba(118, 75, 162, 0.3);
    }

    /* 6. Card Component */
    .portfolio-item {
      overflow: hidden;
      position: relative;
      border-radius: 16px;
      border: 1px solid var(--border-color);
      background: var(--card-background);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .portfolio-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      border-color: rgba(123, 90, 255, 0.5);
    }

    .portfolio-item img {
        transition: transform 0.4s ease;
    }

    .portfolio-item:hover img {
        transform: scale(1.05);
    }

    .portfolio-item .portfolio-info {
      opacity: 0;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      transition: all 0.3s ease;
      background: linear-gradient(to top, rgba(10, 10, 15, 0.9) 0%, rgba(10, 10, 15, 0) 100%);
      padding: var(--spacing-md) var(--spacing-sm) var(--spacing-sm);
      text-align: center;
    }

    .portfolio-item:hover .portfolio-info {
      opacity: 1;
    }

    .portfolio-item .portfolio-info h4 {
      font-size: 18px;
      color: var(--text-primary);
      font-weight: 600;
    }

    .portfolio-item .portfolio-info p {
      color: var(--text-secondary);
      font-size: 14px;
      margin-bottom: 15px;
    }

    .portfolio-item .portfolio-info .preview-link,
    .portfolio-item .portfolio-info .details-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--primary-gradient);
      color: var(--text-primary);
      margin: 0 4px;
      transition: all 0.3s ease;
    }

    .portfolio-item .portfolio-info .preview-link:hover,
    .portfolio-item .portfolio-info .details-link:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(118, 75, 162, 0.4);
    }

    /* 7. Footer */
    .footer {
        background: var(--dark-background);
        border-top: 1px solid var(--border-color);
        padding-top: var(--spacing-lg);
        font-size: 14px;
    }
    .footer .footer-top {
        padding-bottom: var(--spacing-lg);
    }
    .footer .sitename {
        font-family: var(--font-heading);
    }
    .footer .footer-about p {
        color: var(--text-secondary);
    }
    .footer .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid var(--border-color);
        color: var(--text-secondary);
        margin-right: 10px;
    }
    .footer .social-links a:hover {
        background: var(--primary-gradient);
        color: var(--text-primary);
        border-color: transparent;
    }
    .footer h4 {
        font-size: 16px;
        font-weight: bold;
        position: relative;
        padding-bottom: 12px;
    }
    .footer .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }
    .footer .footer-links ul li a {
        color: var(--text-secondary);
    }
    .footer .footer-links ul li a:hover {
        color: var(--text-primary);
    }
    .footer .copyright {
        padding: var(--spacing-md);
        background: #000;
        color: var(--text-secondary);
    }

    /* 8. Preloader & Scroll Top */
    #preloader {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background-color: var(--dark-background);
        display: flex;
        align-items: center;
        justify-content: center;
        /* PERBAIKAN: Paksa untuk tidak menampilkan gambar latar */
        background-image: none !important;
    }
    /* Simple spinner for preloader */
    #preloader:before {
        content: "";
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 4px solid var(--border-color);
        border-top-color: var(--accent-purple);
        animation: preloader-spin 1s linear infinite;
    }

    @keyframes preloader-spin {
        to {
            transform: rotate(360deg);
        }
    }

    .scroll-top {
        position: fixed;
        right: 15px;
        bottom: 15px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-gradient);
        color: var(--text-primary);
        z-index: 99;
        transition: all 0.3s ease;
        opacity: 0;
        visibility: hidden;
    }
    .scroll-top.active {
        opacity: 1;
        visibility: visible;
    }

    /* 9. Responsive Behavior */
    .mobile-nav-toggle {
        color: var(--text-primary);
        font-size: 28px;
        cursor: pointer;
        line-height: 0;
        z-index: 9999;
    }

    @media (max-width: 1200px) {
        .navmenu {
            display: none;
        }
    }

    .mobile-nav-active {
        overflow: hidden;
    }

    .mobile-nav-active .navmenu {
        display: block;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        width: 300px;
        padding: 60px 20px 20px 20px;
        background: rgba(10, 10, 15, 0.9);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-left: 1px solid var(--border-color);
        transition: right 0.3s ease;
        z-index: 9998;
    }

    .mobile-nav-active .navmenu ul {
        display: block;
    }

    .mobile-nav-active .navmenu li a {
        display: block;
        padding: 10px 0;
    }

  </style>
</head>

<body>
  <!-- Latar Belakang Partikel -->
  <div id="particles-js"></div>

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         {{--  <img src="{{ asset('frontend/img/logo.png') }}" alt="">  --}}
        <h1 class="sitename">KyySolutions</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}"><i class="bi bi-house fs-5 me-2"></i> Beranda</a></li>
          <li><a href="{{ route('about') }}"><i class="bi bi-info-circle fs-5 me-2"></i> Tentang</a></li>
          <li><a href="{{ route('service') }}"><i class="bi bi-briefcase fs-5 me-2"></i> Pelayanan</a></li>
          <li><a href="{{ route('portfolio') }}" class="active"><i class="bi bi-image fs-5 me-2"></i> Portfolio</a></li>
          <li><a href="{{ route('team') }}"><i class="bi bi-people fs-5 me-2"></i> Team</a></li>
          <li><a href="{{ route('contact') }}"><i class="bi bi-envelope fs-5 me-2"></i> Contact</a></li>
        </ul>
      </nav>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container text-center" data-aos="fade-up">
        <h2 id="hero-title">Portfolio<span class="typing-cursor">|</span></h2>
        <p style="color: var(--text-secondary);">Karya-karya terbaik yang pernah kami ciptakan.</p>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Portfolio Section -->
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

            <!-- Item Portofolio akan dirender oleh Laravel di sini -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset ('frontend/img/portfolio/website/ibs/ibs-utama.png') }}" class="img-fluid" alt="Website Inventaris Barang">
              <div class="portfolio-info">
                <h4>Website Inventaris Barang</h4>
                <p>Sistem manajemen aset sekolah</p>
                <a href="{{ asset ('frontend/img/portfolio/website/ibs/ibs-utama.png') }}" title="Website" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('ibs-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="{{ asset ('frontend/img/portfolio/media/media-kerapansapi.png') }}" class="img-fluid" alt="Media Karapan Sapi">
                <div class="portfolio-info">
                  <h4>Media Interaktif Karapan Sapi</h4>
                  <p>Media pembelajaran budaya Madura</p>
                  <a href="{{ asset ('frontend/img/portfolio/video/Puzzle.mp4') }}" title="Media-Puzzle Game" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route ('karapan_sapi-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{ asset ('frontend/img/portfolio/game/game-1.png') }}" class="img-fluid" alt="Game Puzzle">
              <div class="portfolio-info">
                <h4>Game Puzzle Edukatif</h4>
                <p>Permainan asah otak yang menyenangkan</p>
                <a href="{{ asset ('frontend/img/portfolio/video/Puzzle.mp4') }}" title="Puzzle" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('puzzle-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="{{ asset ('frontend/img/portfolio/asset/3D Hukum Newton.png') }}" class="img-fluid" alt="Asset 3D Hukum Newton">
              <div class="portfolio-info">
                <h4>Asset 3D Hukum Newton</h4>
                <p>Model 3D untuk visualisasi fisika</p>
                <a href="{{ asset ('frontend/img/portfolio/asset/3D Hukum Newton.png') }}" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route ('asset_newton-detail') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <!-- Tambahkan item portofolio lainnya dengan struktur yang sama -->

          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->
  </main>



    <div class="copyright text-center">
        <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">KyySolutions</strong> <span>All Rights Reserved</span></p>
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

  <!-- Particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!-- Main JS File -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      "use strict";

      // Preloader
      const preloader = document.querySelector('#preloader');
      if (preloader) {
        window.addEventListener('load', () => {
          preloader.remove();
        });
      }

      // Mobile Nav Toggle
      const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
      if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', function(event) {
          event.preventDefault();
          document.body.classList.toggle('mobile-nav-active');
          this.classList.toggle('bi-list');
          this.classList.toggle('bi-x');
        });
      }

      // Scroll Top Button
      const scrollTop = document.querySelector('.scroll-top');
      if (scrollTop) {
        const togglescrollTop = function() {
          window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
        window.addEventListener('load', togglescrollTop);
        document.addEventListener('scroll', togglescrollTop);
        scrollTop.addEventListener('click', (e) => {
          e.preventDefault();
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });
      }

      // AOS Initialization
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });

      // Isotope Filtering
      let portfolioContainer = document.querySelector('.isotope-container');
      if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
          itemSelector: '.isotope-item',
          layoutMode: 'masonry'
        });

        let portfolioFilters = document.querySelectorAll('.isotope-filters li');
        portfolioFilters.forEach(function(el) {
          el.addEventListener('click', function() {
            portfolioFilters.forEach(function(filter) {
              filter.classList.remove('filter-active');
            });
            this.classList.add('filter-active');
            portfolioIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });
          }, false);
        });
      }

      // Glightbox
      const glightbox = GLightbox({
        selector: '.glightbox'
      });

      // Typing Animation
      const heroTitle = document.getElementById('hero-title');
      if(heroTitle) {
        const text = "Portfolio";
        let index = 0;
        function type() {
            if (index < text.length) {
                heroTitle.innerHTML = text.substring(0, index + 1) + '<span class="typing-cursor">|</span>';
                index++;
                setTimeout(type, 150);
            } else {
                // Hapus kursor setelah selesai mengetik
                setTimeout(() => {
                    if(heroTitle.querySelector('.typing-cursor')) {
                      heroTitle.querySelector('.typing-cursor').style.display = 'none';
                    }
                }, 2000);
            }
        }
        type();
      }

      // Particles.js Config
      particlesJS("particles-js", {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "repulse": {
              "distance": 100,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
          }
        },
        "retina_detect": true
      });
    });
  </script>

</body>

</html>
