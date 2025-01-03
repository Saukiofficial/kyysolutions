
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
<!--  custom css  -->
<style>
    :root {
        --primary-color: #020330;
        --secondary-color: #4e6bff;
        --accent-color: #00c3ff;
        --text-color: #333333;
        --light-bg: #f8f9fa;
        --default-color: #444444;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
        background-color: #ffffff;
    }



    .sitename {
        color:var(--secondary-color);
        font-weight: 700;
        font-size: 1rem;
        margin-left: 10px;
    }

    .hero {
        position: relative;
        min-height: 60vh;
        background: linear-gradient(rgba(2, 3, 48, 0.8), rgba(2, 3, 48, 0.8)), url('frontend/img/sementara.jpg');
        background-size: cover;
        background-position: center;
        padding: 120px 0;
    }

    .hero h2 {
        color: #ffffff;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
    }

    .contact-section {
        padding: 80px 0;
        background-color: var(--light-bg);
    }

    .info-card {
        background: #ffffff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: transform 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-card i {
        font-size: 2.5rem;
        color: var(--secondary-color);
        margin-bottom: 20px;
    }

    .contact-form {
        background: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        margin-bottom: 20px;
    }

    .form-control:focus {
        border-color: var(--secondary-color);
        box-shadow: 0 0 0 0.2rem rgba(78, 107, 255, 0.25);
    }

    .btn-submit {
        background: var(--secondary-color);
        color: #ffffff;
        padding: 12px 30px;
        border-radius: 30px;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: var(--primary-color);
        transform: translateY(-2px);
    }

    .footer {
        background: var(--default-color);
        color: #ffffff;
        padding: 30px 0;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        margin: 0 10px;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background: var(--default-color);
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .hero {
            min-height: 40vh;
            padding: 80px 0;
        }

        .contact-form {
            padding: 20px;
        }
    }
</style>
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
        <a href="{{ route('portfolio') }}">Portfolio</a>
        <a href="{{ route('team') }}">Team</a>
        <a href="{{ route('contact') }}"class="active">Contact</a>
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
  <img src="frontend/img/sementara.jpg" alt="" data-aos="fade-in" class="img-fluid w-100 h-60">


  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <h2 class="display-3">Get in Touch</h2>
      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->
<section class="contact-section">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-4">
                <div class="info-card text-center" data-aos="fade-up">
                    <i class="bi bi-geo-alt"></i>
                    <h4 class="mb-3">Lokasi</h4>
                    <p>Poreh, Lenteng, Sumenep<br>Madura, Jawa Timur 69461</p>
                </div>

                <div class="info-card text-center" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-telephone"></i>
                    <h4 class="mb-3">Telephone</h4>
                    <p>081232916758</p>
                </div>

                <div class="info-card text-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-envelope"></i>
                    <h4 class="mb-3">Email</h4>
                    <p>kyysolutions17@gmail.com</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="mb-4">Send us a Message</h3>
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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
            <li><a href="{{ ('website-sevice-details') }}">Pembuatan Website</a></li>
            <li><a href="{{ ('game-sevice-details') }}">Pembutan Game</a></li>
            <li><a href="{{ ('media-sevice-details') }}">Media Pembelajaran</a></li>
            <li><a href="{{ ('design-sevice-details') }}">Design Grafis</a></li>
            <li><a href="{{ ('asset3d-sevice-details') }}">Asset 3D</a></li>
            <li><a href="{{ ('skripsi-sevice-details') }}">Skripsi</a></li>
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
