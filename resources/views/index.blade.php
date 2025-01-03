@extends('layouts.first-page.base')

@section('title', 'TA Planner | Home Page')

@section('content')
    <section id="hero" class="hero section">

        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <div class="d-flex justify-content-between w-100">
                <img src="{{ asset('assets/rpl.img/1.png') }}" class="img-fluid animated" alt="" width="20%">

                <div class="d-flex flex-column justify-content-center align-items-center"
                    style="position: relative; top: -100px;">
                    <img src="{{ asset('assets/rpl.img/5.png') }}" class="img-fluid animated" alt="" width="20%">
                    <h1>TA Planner</h1>
                    <p>Rencanakan TA-mu, Wujudkan Mimpimu!</p>
                    <div class="d-flex">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>

                <img src="{{ asset('assets/rpl.img/2.png') }}" class="img-fluid animated" alt="" width="15%">
            </div>

        </div>

    </section>
    <section id="featured-services" class="featured-services section">

        {{-- <div class="container"> --}}

        <div class="row gy-4 justify-content-center">

            <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="300">
                <div class="service-item service-box position-relative text-center">
                    <div class="icon mt-2">
                        <i class="bi bi-calendar4-week icon" style="font-size: 3rem;"></i>
                    </div>
                    <h4><a class="stretched-link">Jadwal Bimbingan</a></h4>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="300">
                <div class="service-item service-box position-relative text-center">
                    <div class="icon mt-3">
                        <i class="fa-regular fa-bell" style="font-size: 3rem;"></i>
                    </div>
                    <h4><a class="stretched-link">Pengingat Bimbingan</a></h4>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="300">
                <div class="service-item service-box position-relative text-center">
                    <div class="icon mt-3">
                        <i class="fa-regular fa-comment" style="font-size: 3rem;"></i>
                    </div>
                    <h4><a class="stretched-link">Umpan Balik</a></h4>
                </div>
            </div>
            <!-- End Service Item -->


        </div>

        </div>

    </section>
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/rpl.img/3.png') }}" class="img-fluid" alt="">
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
                                    <a href="/about" class="btn btn-show-more">Show More</a>
                                </div>
                            </div>
                        </div>

                        <!-- End Tab 1 Content -->

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade">

            <div class="row gy-5 gx-lg-5">



                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                    required="">
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
                        <img src="{{ asset('assets/rpl.img/4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
