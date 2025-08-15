<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - KyySolutions</title>
  <meta name="description" content="Layanan profesional dari KyySolutions: pengembangan web, game, media pembelajaran, dan aset 3D.">
  <meta name="keywords" content="web development, game development, 3d assets, graphic design">

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
    }
    .navmenu ul { list-style: none; margin: 0; padding: 0; display: flex; }
    .navmenu li a { color: var(--text-secondary); padding: 10px 15px; font-weight: 500; position: relative; }
    .navmenu li a:hover, .navmenu li a.active { color: var(--text-primary); }
    .navmenu li a::after { content: ''; position: absolute; bottom: 0; left: 15px; right: 15px; height: 2px; background: var(--primary-gradient); transform: scaleX(0); transition: transform 0.3s ease; }
    .navmenu li a:hover::after, .navmenu li a.active::after { transform: scaleX(1); }
    .header-social-links a { color: var(--text-secondary); margin-left: 1rem; }
    .header-social-links a:hover { color: var(--text-primary); }

    /* Hero Section */
    .hero {
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero h2 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .typing-cursor { animation: blink 0.7s infinite; }
    @keyframes blink { 50% { opacity: 0; } }

    /* Services Section */
    .section-title {
        text-align: center;
        margin-bottom: var(--spacing-lg);
    }
    .section-title h2 {
        font-size: 2.5rem;
        margin-bottom: var(--spacing-sm);
    }
    .section-title p {
        max-width: 600px;
        margin: 0 auto;
        color: var(--text-secondary);
    }

    .service-item {
        background: var(--card-background);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: 2.5rem 2rem;
        height: 100%;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
    }
    .service-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border-color: rgba(123, 90, 255, 0.5);
    }
    .service-item .icon-container {
        width: 60px;
        height: 60px;
        margin: 0 auto 1.5rem auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--primary-gradient);
        transition: transform 0.3s ease;
    }
    .service-item:hover .icon-container {
        transform: scale(1.1);
    }
    .service-item .icon-container i {
        font-size: 1.8rem;
        color: var(--text-primary);
    }
    .service-item h3 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }
    .service-item h3 a {
        color: var(--text-primary);
    }
    .service-item h3 a:hover {
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .service-item p {
        color: var(--text-secondary);
        flex-grow: 1; /* Membuat deskripsi mengisi ruang */
        margin-bottom: 1.5rem;
    }
    .btn-cta {
        display: inline-block;
        padding: 10px 30px;
        border-radius: 50px;
        background: var(--primary-gradient);
        color: var(--text-primary);
        font-weight: 600;
        border: 1px solid transparent;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .btn-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(118, 75, 162, 0.3);
    }

    /* Footer */
    .footer { background: #06060a; padding-top: var(--spacing-lg); border-top: 1px solid var(--border-color); }
    .footer h4 { font-size: 1rem; font-weight: 600; }
    .footer .footer-about p, .footer .footer-links ul li a, .footer .footer-contact p { color: var(--text-secondary); }
    .footer .footer-links ul li a:hover { color: var(--text-primary); }
    .footer .social-links a { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; border: 1px solid var(--border-color); color: var(--text-secondary); margin-right: 10px; }
    .footer .social-links a:hover { background: var(--primary-gradient); color: var(--text-primary); border-color: transparent; }
    .footer .copyright { padding: var(--spacing-md) 0; margin-top: var(--spacing-md); border-top: 1px solid var(--border-color); }

    /* Preloader & Scroll Top */
    body #preloader { position: fixed; inset: 0; z-index: 9999; background-color: var(--dark-background); display: flex; align-items: center; justify-content: center; background-image: none !important; }
    body #preloader:before { content: ""; width: 50px; height: 50px; border-radius: 50%; border: 4px solid var(--border-color); border-top-color: var(--accent-purple); animation: preloader-spin 1s linear infinite; }
    @keyframes preloader-spin { to { transform: rotate(360deg); } }
    .scroll-top { position: fixed; right: 15px; bottom: 15px; width: 40px; height: 40px; border-radius: 50%; background: var(--primary-gradient); color: var(--text-primary); z-index: 99; transition: all 0.3s ease; opacity: 0; visibility: hidden; }
    .scroll-top.active { opacity: 1; visibility: visible; }

    /* Responsive Nav */
    .mobile-nav-toggle { color: var(--text-primary); font-size: 28px; cursor: pointer; line-height: 0; z-index: 9999; }
    @media (max-width: 1200px) { .navmenu { display: none; } }
    .mobile-nav-active { overflow: hidden; }
    .mobile-nav-active .navmenu { display: block; position: fixed; top: 0; right: 0; bottom: 0; width: 300px; padding: 60px 20px 20px 20px; background: rgba(10, 10, 15, 0.9); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-left: 1px solid var(--border-color); transition: right 0.3s ease; z-index: 9998; }
    .mobile-nav-active .navmenu ul { display: block; }
    .mobile-nav-active .navmenu li a { display: block; padding: 10px 0; }
  </style>
</head>

<body>

  <div id="particles-js"></div>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
         {{--  <img src="{{ asset('frontend/img/logo.png') }}" alt="">  --}}
        <h1 class="sitename">KyySolutions</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-house fs-5 me-2"></i> Beranda</a></li>
            <li><a href="{{ route('about') }}"><i class="bi bi-info-circle fs-5 me-2"></i> Tentang</a></li>
            <li><a href="{{ route('service') }}" class="active"><i class="bi bi-briefcase fs-5 me-2"></i> Pelayanan</a></li>
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
          <h2 id="hero-title">Layanan Kami<span class="typing-cursor">|</span></h2>
          <p style="color: var(--text-secondary);">Solusi digital terbaik untuk mewujudkan ide Anda.</p>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Apa yang Kami Tawarkan</h2>
          <p>Kami menyediakan berbagai layanan profesional untuk memenuhi kebutuhan digital Anda dengan teknologi dan desain terkini.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-globe"></i>
              </div>
              <h3><a href="{{ route ('website-service-details') }}">Pembuatan Website</a></h3>
              <p>Kami mengembangkan website profesional yang responsif, modern, dan sesuai dengan kebutuhan bisnis Anda.</p>
              <a href="{{ route ('website-service-details') }}" class="btn-cta">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-controller"></i>
              </div>
              <h3><a href="{{ route ('game-service-details') }}">Pembuatan Game</a></h3>
              <p>Kembangkan game yang menarik dan interaktif dengan tim developer kami, mewujudkan ide game Anda menjadi nyata.</p>
              <a href="{{ route ('game-service-details') }}" class="btn-cta">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-journal-code"></i>
              </div>
              <h3><a href="{{ route ('media-service-details') }}">Media Pembelajaran</a></h3>
              <p>Solusi media pembelajaran interaktif yang efektif untuk meningkatkan engagement dan pemahaman siswa.</p>
              <a href="{{ route ('media-service-details') }}" class="btn-cta">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-palette"></i>
              </div>
              <h3><a href="#">Desain Grafis</a></h3>
              <p>Layanan desain grafis profesional untuk kebutuhan branding, marketing, dan komunikasi visual bisnis Anda.</p>
              <a href="#" class="btn-cta">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-boxes"></i>
              </div>
              <h3><a href="{{ route ('asset3d-service-details') }}">Asset 3D</a></h3>
              <p>Pembuatan asset 3D berkualitas tinggi untuk game, animasi, atau visualisasi produk dengan detail memukau.</p>
              <a href="{{ route ('asset3d-service-details') }}" class="btn-cta">Selengkapnya</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item">
              <div class="icon-container">
                <i class="bi bi-mortarboard"></i>
              </div>
              <h3><a href="#">Bantuan Skripsi</a></h3>
              <p>Bantuan dan konsultasi pengerjaan skripsi di bidang IT dengan pendekatan profesional sesuai standar akademik.</p>
              <a href="#" class="btn-cta">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services Section -->

  </main>



  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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
        const text = "Layanan Kami";
        let index = 0;
        function type() {
            if (index < text.length) {
                heroTitle.innerHTML = text.substring(0, index + 1) + '<span class="typing-cursor">|</span>';
                index++;
                setTimeout(type, 150);
            } else {
                setTimeout(() => { if(heroTitle.querySelector('.typing-cursor')) { heroTitle.querySelector('.typing-cursor').style.display = 'none'; } }, 2000);
            }
        }
        type();
      }

      particlesJS("particles-js", {
        "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle" }, "opacity": { "value": 0.5, "random": false }, "size": { "value": 3, "random": true }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false } },
        "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "repulse": { "distance": 100, "duration": 0.4 }, "push": { "particles_nb": 4 } } },
        "retina_detect": true
      });
    });
  </script>

</body>
</html>
