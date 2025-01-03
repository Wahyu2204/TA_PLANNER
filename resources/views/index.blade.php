<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - TA Planner</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/rpl.img/5.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">

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
                    <a class="btn-getstarted" href="/pilihlogin" style="color: #002645">Sign In<i
                        class="fa-solid fa-user-plus"></i></a>
                    <li><a href="/about">About</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
                data-aos="zoom-out">
                <div class="d-flex justify-content-between w-100">
                    <img src="assets/rpl.img/1.png" class="img-fluid animated" alt="" width="20%">

                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="position: relative; top: -100px; margin-right: 50px;">
                        <img src="assets/rpl.img/5.png" class="img-fluid animated" alt="" width="20%">
                        <h1>TA Planner</h1>
                        <p>Rencanakan TA-mu, Wujudkan Mimpimu!</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>

                    <img src="assets/rpl.img/2.png" class="img-fluid animated" alt="" width="15%">
                </div>

            </div>

        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            {{-- <div class="container"> --}}

            <div class="row gy-4 justify-content-center">

                <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="service-item service-box position-relative text-center">
                        <div class="icon mt-2">
                            <i class="bi bi-calendar4-week icon" style="font-size: 3rem;"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Jadwal Bimbingan</a></h4>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="service-item service-box position-relative text-center">
                        <div class="icon mt-3">
                            <i class="fa-regular fa-bell" style="font-size: 3rem;"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Pengingat Bimbingan</a></h4>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="service-item service-box position-relative text-center">
                        <div class="icon mt-3">
                            <i class="fa-regular fa-comment" style="font-size: 3rem;"></i>
                        </div>
                        <h4><a href="" class="stretched-link">Umpan Balik</a></h4>
                    </div>
                </div>
                <!-- End Service Item -->


            </div>

            </div>

        </section>
        <!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="assets/rpl.img/3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 py-3">


                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="about-tab1">
                                <div class="content-box p-4">
                                    <h3 class="">Welcome To <span style="font-weight: 600">TA Planner</span>
                                    </h3>
                                    <p class="fst-italic text-justify">
                                        TA Planner adalah platform digital yang membantu mahasiswa dan dosen pembimbing
                                        mengelola proses bimbingan tugas akhir secara efisien dan terstruktur. Dengan
                                        fitur seperti penjadwalan, pelacakan perkembangan, pengingat, serta kolaborasi
                                        dokumen dan komunikasi, TA Planner mendukung produktivitas pengguna untuk
                                        menyelesaikan tugas akhir tepat waktu.
                                    </p>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-show-more">Show More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- End Tab 1 Content -->

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- /About Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up">

                <div class="row gy-5 gx-lg-5">



                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Name" required="">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="number" class="form-control" id="number"
                                        placeholder="Phone" required="">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <textarea class="form-control" name="message" placeholder="Message" required=""
                                    style="width: 100%; height: 150px; resize: vertical;"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text"><button type="submit">Submit</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                    <div class="col-lg-6">
                        <div class="contact-img">
                            <img src="assets/rpl.img/4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- /Contact Section -->

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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
