<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-center">

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home<br></a></li>
                    <a class="btn-getstarted" href="/pilihlogin" style="color: #002645"><i
                            class="fa-solid fa-user-plus mx-2"></i>Sign In</a>
                    <li><a href="/about">About</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative mt-0"
                data-aos="zoom-out">
                <div class="d-flex justify-content-center" style="background-color: #EFEFEF; margin-top: -50px;">

                    <div class="d-flex flex-column align-items-center p-5">
                        <img src="assets/rpl.img/5.png" class="img-fluid" alt="" width="50%">
                        <h1>Sign In</h1>
                        <p>Rencanakan TA-mu, Wujudkan Mimpimu!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#about" class="btn-get-started scrollto me-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /Hero Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>

                    <div class="social-links col-lg-3 col-md-4 footer-links">
                        <h4>Follow Us</h4>
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-about order-lg-last">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/rpl.img/5.png" alt="" width="40px">
                            <span class="sitename">TA Planner</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Rencanakan TA-mu, Wujudkan Mimpimu!</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">
                <div>
                    © Copyright 2024 All Rights Reserved | This template is made with by <a
                        href="https://bootstrapmade.com/">TA Planner</a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
