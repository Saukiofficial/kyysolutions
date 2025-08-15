<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KyySolutions - Solusi Digital Kreatif</title>
  <meta name="description" content="KyySolutions menyediakan solusi digital kreatif termasuk pengembangan web, game, media pembelajaran, dan aset 3D.">
  <meta name="keywords" content="KyySolutions, pengembangan web, pengembangan game, media pembelajaran, aset 3d">

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

  {{-- <link href="{{ asset ('frontend/css/main.css') }}" rel="stylesheet"> --}}

  <style>
    /*--------------------------------------------------------------
    # Desain Kustom Konsisten
    --------------------------------------------------------------*/
    :root {
      --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      --dark-background: #0a0a0f;
      --card-background: rgba(255, 255, 255, 0.05);
      --text-primary: #ffffff;
      --text-secondary: rgba(255, 255, 255, 0.7);
      --border-color: rgba(255, 255, 255, 0.1);
      --font-primary: 'Inter', sans-serif;
      --font-heading: 'Space Grotesk', sans-serif;
      --spacing-sm: 1rem;
      --spacing-md: 2rem;
      --spacing-lg: 3rem;
    }

    body {
      background-color: var(--dark-background);
      color: var(--text-primary);
      font-family: var(--font-primary);
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-heading);
      color: var(--text-primary);
      font-weight: 700;
    }

    /* PERBAIKAN: Menghilangkan semua garis bawah dari link */
    a {
        text-decoration: none !important;
    }

    .section {
        padding: var(--spacing-lg) 0;
        position: relative;
    }

    .container, .container-fluid {
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1;
    }

    /* Header */
    .header {
      position: fixed; top: 0; width: 100%; z-index: 1030;
      background: rgba(10, 10, 15, 0.5);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--border-color);
      padding: var(--spacing-sm) 0;
    }
    .header .logo h1.sitename { font-family: var(--font-heading); color: var(--text-primary); }
    .navmenu ul { list-style: none; margin: 0; padding: 0; display: flex; }
    .navmenu li a { color: var(--text-secondary); padding: 10px 15px; font-weight: 500; position: relative; }
    .navmenu li a:hover, .navmenu li a.active { color: var(--text-primary); }

    /* Nonaktifkan garis bawah aktif */
    /* .navmenu li a::after { content: ''; position: absolute; bottom: 0; left: 15px; right: 15px; height: 2px; background: var(--primary-gradient); transform: scaleX(0); transition: transform 0.3s ease; }
    .navmenu li a:hover::after, .navmenu li a.active::after { transform: scaleX(1); } */

    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex; align-items: center; justify-content: center; text-align: center;
    }
    .hero h1 {
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1rem;
    }
    .hero .hero-subtitle {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: var(--text-secondary);
        max-width: 600px;
        margin: 0 auto 2rem auto;
    }
    .typing-cursor { animation: blink 0.7s infinite; }
    @keyframes blink { 50% { opacity: 0; } }

    .btn-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        background: var(--primary-gradient);
        color: var(--text-primary);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px rgba(118, 75, 162, 0.3);
    }
    .btn-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(118, 75, 162, 0.4);
    }

    /* Features Section */
    .section-title { text-align: center; margin-bottom: var(--spacing-lg); }
    .section-title h2 { font-size: 2.5rem; margin-bottom: var(--spacing-sm); }
    .section-title p { max-width: 700px; margin: 0 auto; color: var(--text-secondary); line-height: 1.7; }

    .feature-card {
        background: var(--card-background);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2rem;
        height: 100%;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        text-align: center;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border-color: rgba(123, 90, 255, 0.5);
    }
    .feature-card .icon-container {
        width: 60px; height: 60px; margin: 0 auto 1.5rem auto;
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        background: var(--primary-gradient);
    }
    .feature-card .icon-container i { font-size: 1.8rem; color: var(--text-primary); }
    .feature-card h3 { font-size: 1.25rem; margin-bottom: 1rem; }
    .feature-card p { color: var(--text-secondary); }

    /* Footer & Preloader */
    .footer { background: #06060a; padding-top: var(--spacing-lg); border-top: 1px solid var(--border-color); }
    .footer .copyright { padding: var(--spacing-md) 0; margin-top: var(--spacing-md); border-top: 1px solid var(--border-color); }
    body #preloader { position: fixed; inset: 0; z-index: 9999; background-color: var(--dark-background); display: flex; align-items: center; justify-content: center; background-image: none !important; }
    body #preloader:before { content: ""; width: 50px; height: 50px; border-radius: 50%; border: 4px solid var(--border-color); border-top-color: var(--accent-purple); animation: preloader-spin 1s linear infinite; }
    @keyframes preloader-spin { to { transform: rotate(360deg); } }
    .scroll-top { position: fixed; right: 15px; bottom: 15px; width: 40px; height: 40px; border-radius: 50%; background: var(--primary-gradient); color: var(--text-primary); z-index: 99; transition: all 0.3s ease; opacity: 0; visibility: hidden; display: flex; align-items: center; justify-content: center; }
    .scroll-top.active { opacity: 1; visibility: visible; }

    /* Responsive Nav */
    .mobile-nav-toggle { color: var(--text-primary); font-size: 28px; cursor: pointer; line-height: 0; z-index: 9999; }
    @media (max-width: 1200px) { .navmenu { display: none; } }
    .mobile-nav-active .navmenu { display: block; position: fixed; top: 0; right: 0; bottom: 0; width: 300px; padding: 60px 20px 20px 20px; background: rgba(10, 10, 15, 0.9); backdrop-filter: blur(10px); border-left: 1px solid var(--border-color); z-index: 9998; }
    .mobile-nav-active .navmenu ul { display: block; }
    .mobile-nav-active .navmenu li a { display: block; padding: 10px 0; }
  </style>
</head>

<body>

  <div id="particles-js"></div>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         {{--  <img src="{{ asset('frontend/img/logo.png') }}" alt="KyySolutions Logo">  --}}
        <h1 class="sitename">KyySolutions</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}" class="active"><i class="bi bi-house fs-5 me-2"></i> Beranda</a></li>
            <li><a href="{{ route('about') }}"><i class="bi bi-info-circle fs-5 me-2"></i> Tentang</a></li>
            <li><a href="{{ route('service') }}"><i class="bi bi-briefcase fs-5 me-2"></i> Pelayanan</a></li>
            <li><a href="{{ route('portfolio') }}"><i class="bi bi-image fs-5 me-2"></i> Portfolio</a></li>
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
          <h1 id="hero-title">Welcome to KyySolutions<span class="typing-cursor">|</span></h1>
          <p class="hero-subtitle">Solusi digital terbaik untuk mewujudkan ide dan meningkatkan keahlian Anda.</p>
          <a href="{{ route('service') }}" class="btn-cta">
            <i class="bi bi-arrow-right-circle"></i>
            Lihat Layanan Kami
          </a>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Mengapa Memilih Kami?</h2>
                <p>Kami menggabungkan kreativitas, teknologi, dan strategi untuk memberikan hasil yang tidak hanya memenuhi, tetapi melampaui ekspektasi Anda.</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="icon-container"><i class="bi bi-code-slash"></i></div>
                        <h3>Pengembangan Modern</h3>
                        <p>Menggunakan teknologi terdepan untuk mengembangkan solusi yang inovatif, aman, dan efisien.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="icon-container"><i class="bi bi-lightbulb"></i></div>
                        <h3>Solusi Kreatif</h3>
                        <p>Pendekatan kreatif dalam menyelesaikan setiap tantangan untuk menghasilkan produk yang unik.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="icon-container"><i class="bi bi-graph-up-arrow"></i></div>
                        <h3>Peningkatan Keahlian</h3>
                        <p>Program yang dirancang khusus untuk meningkatkan kemampuan dan kompetensi profesional Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Features Section -->

  </main>


  <a href="#" id="scroll-top" class="scroll-top"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Particles.js -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <!-- Main JS File -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      "use strict";
      const preloader = document.querySelector('#preloader');
      if (preloader) { window.addEventListener('load', () => { preloader.remove(); }); }

      const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
      if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', function(event) {
          event.preventDefault();
          document.body.classList.toggle('mobile-nav-active');
          this.classList.toggle('bi-list');
          this.classList.toggle('bi-x');
        });
      }

      const scrollTop = document.querySelector('.scroll-top');
      if (scrollTop) {
        const togglescrollTop = function() { window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active'); }
        window.addEventListener('load', togglescrollTop);
        document.addEventListener('scroll', togglescrollTop);
        scrollTop.addEventListener('click', (e) => { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });
      }

      AOS.init({ duration: 1000, easing: 'ease-in-out', once: true, mirror: false });

      const heroTitle = document.getElementById('hero-title');
      if(heroTitle) {
        const text = "Welcome to KyySolutions";
        let index = 0;
        function type() {
            if (index < text.length) {
                heroTitle.innerHTML = text.substring(0, index + 1) + '<span class="typing-cursor">|</span>';
                index++;
                setTimeout(type, 120);
            } else {
                setTimeout(() => { if(heroTitle.querySelector('.typing-cursor')) { heroTitle.querySelector('.typing-cursor').style.display = 'none'; } }, 3000);
            }
        }
        type();
      }

      particlesJS("particles-js", {
        "particles": { "number": { "value": 80 }, "color": { "value": "#ffffff" }, "shape": { "type": "circle" }, "opacity": { "value": 0.5 }, "size": { "value": 3 }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4 }, "move": { "enable": true, "speed": 2 } },
        "interactivity": { "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" } } },
      });
    });
  </script>

</body>
</html>
