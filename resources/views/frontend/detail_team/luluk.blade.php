<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Tim - Luluk Kusfiah</title>
  <meta name="description" content="Profil Luluk Kusfiah, Konsultan Akademik di KyySolutions.">
  <meta name="keywords" content="Luluk Kusfiah, Konsultan Akademik, SINTA, Google Scholar, Turnitin, SPSS">

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

    a { text-decoration: none !important; color: var(--text-primary); }

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
    .navmenu ul { list-style: none; margin: 0; padding: 0; display: flex; }
    .navmenu li a { color: var(--text-secondary); padding: 10px 15px; font-weight: 500; position: relative; }
    .navmenu li a:hover, .navmenu li a.active { color: var(--text-primary); }

    /* Hero Section */
    .hero {
      padding-top: 120px;
      padding-bottom: 60px;
    }
    .hero .profile-img {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        border: 5px solid var(--border-color);
        box-shadow: 0 0 30px rgba(123, 90, 255, 0.3);
    }
    .hero h1 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
    }
    .hero h2 {
        font-size: 1.25rem;
        color: var(--text-secondary);
        font-family: var(--font-primary);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Content Card */
    .content-card {
        background: var(--card-background);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        padding: var(--spacing-lg);
        backdrop-filter: blur(10px);
    }
    .content-card h3 {
        font-size: 1.75rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid;
        border-image: var(--primary-gradient) 1;
        padding-left: 1rem;
    }
    .content-card p {
        color: var(--text-secondary);
        line-height: 1.8;
    }

    /* Tools & Languages */
    .tool-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
    }
    .tool-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        width: 120px;
        transition: transform 0.3s ease;
    }
    .tool-item:hover {
        transform: translateY(-5px);
    }
    .tool-item img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }
    .tool-item span {
        font-size: 0.8rem;
        color: var(--text-secondary);
        text-align: center;
    }

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
         {{--  <img src="{{ asset('frontend/img/logo.png') }}" alt="">  --}}
        <h1 class="sitename">KyySolutions</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home') }}"><i class="bi bi-house fs-5 me-2"></i> Beranda</a></li>
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
          <img src="{{ asset('frontend/img/detail-team/img-tools/Luluk1.png') }}" class="profile-img mb-4" alt="Luluk Kusfiah">
          <h1>LULUK KUSFIAH S.Pd, Gr</h1>
          <h2>KONSULTAN AKADEMIK</h2>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about-me" class="about-me section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content-card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Saya</h3>
                        <p>
                            Halo! Saya Luluk Kusfiah, seorang konsultan akademik dengan dedikasi tinggi untuk membantu Anda meraih kesuksesan di dunia akademik. Berbekal pengalaman dan keahlian di bidang SINTA, Google Scholar, Turnitin, dan SPSS, saya mampu memberikan solusi yang terukur dan efektif untuk kebutuhan penelitian, publikasi, maupun pengembangan karya ilmiah. Saya juga mahir menggunakan berbagai tools produktivitas seperti Microsoft Word, PowerPoint, dan Excel, sehingga dapat memastikan setiap proyek terselesaikan dengan detail dan profesionalisme yang tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content-card" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="mb-4">Tools & Spesialisasi</h3>
                        <div class="tool-grid">
                            <!-- Tools -->
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/tools/word.png') }}" alt="Microsoft Word"><span>Microsoft Word</span></div>
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/tools/ppt.png') }}" alt="PowerPoint"><span>PowerPoint</span></div>
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/tools/excel.png') }}" alt="Microsoft Excel"><span>Microsoft Excel</span></div>
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/tools/spss.png') }}" alt="SPSS"><span>SPSS</span></div>
                            <!-- Spesialisasi -->
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/img-tools/sinta_logo.png') }}" alt="SINTA"><span>SINTA</span></div>
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/img-tools/Google_Scholar_Logo.png') }}" alt="Google Scholar"><span>Google Scholar</span></div>
                            <div class="tool-item"><img src="{{ asset('frontend/img/detail-team/img-tools/turnitin.png') }}" alt="Turnitin"><span>Turnitin</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Skills Section -->

  </main>

  <footer id="footer" class="footer">
    <!-- Footer content will be consistent -->
  </footer>

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

      particlesJS("particles-js", {
        "particles": { "number": { "value": 80 }, "color": { "value": "#ffffff" }, "shape": { "type": "circle" }, "opacity": { "value": 0.5 }, "size": { "value": 3 }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4 }, "move": { "enable": true, "speed": 2 } },
        "interactivity": { "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" } } },
      });
    });
  </script>

</body>
</html>
