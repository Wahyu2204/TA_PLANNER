@extends('layouts.first-page.base')

@section('title', 'TA Planner | About Page')

@section('content')
    <section id="about" class="section first">

        <div class="container" data-aos="fade-up">

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('assets/rpl.img/5.png') }}" alt="" width="12%" class="logo-about-pages">
                </div>

                <!-- Tab Content -->
                <div class="tab-content ">

                    <div class="tab-pane fade show active" id="about-tab1">
                        <div class="content-box p-5">
                            <p class="fst-italic text-justify" style="padding-top: 50px">
                                TA Planner adalah platform digital yang membantu mahasiswa dan dosen pembimbing
                                mengelola proses bimbingan tugas akhir secara efisien dan terstruktur. Dengan
                                fitur seperti penjadwalan, pelacakan perkembangan, pengingat, serta kolaborasi
                                dokumen dan komunikasi, TA Planner mendukung produktivitas pengguna untuk
                                menyelesaikan tugas akhir tepat waktu.
                            </p>
                        </div>
                    </div>

                    <!-- End Tab 1 Content -->

                </div>

            </div>




        </div>

    </section>
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/rpl.img/6.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7 py-3">

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="about-tab1">
                            <h3 class="text-center" style="font-weight: 600">Visi</h3>
                            <div class="content-box p-5">

                                <p class="fst-italic text-justify p-2">
                                    Membantu memudahkan mahasiswa dan dosen pembimbing dalam proses bimbingan dalam
                                    merencanakan, mengelola, dan menyelesaikan tugas akhir dengan lebih efisien dan
                                    terstruktur.
                                </p>
                            </div>
                        </div>

                        <!-- End Tab 1 Content -->

                    </div>

                </div>

                <div class="col-lg-7 py-3">

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="about-tab1">
                            <h3 class="text-center" style="font-weight: 600">Misi</h3>
                            <div class="content-box p-5">

                                <p class="fst-italic text-justify p-2">
                                    Menyediakan platform intuitif untuk membantu pengguna dalam menyelesaikan tugas
                                    akhir, mulai dari pemilihan topik hingga penyusunan. TA Planner mendukung
                                    pengelolaan waktu melalui penjadwalan, pengingat, pelacakan perkembangan
                                    real-time, serta fitur kolaborasi seperti berbagi dokumen, chat, dan notifikasi,
                                    sehingga pengguna tetap produktif dan terhindar dari rasa kewalahan.
                                </p>
                            </div>
                        </div>

                        <!-- End Tab 2 Content -->

                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('assets/rpl.img/7.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>
    <section id="team" class="team section">
        <div class="container" data-aos="fade-up">
            <div class="section-header text-center">
                <h2>Our Team</h2>
                <p>Meet the dedicated team behind TA Planner</p>
            </div>

            <!-- Top Row: Product Owner & Scrum Master -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team1.jpg') }}" class="img-fluid" alt="">
                        <h4>John Doe</h4>
                        <p>Product Owner</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="assets/rpl.img/team2.jpg" class="img-fluid" alt="">
                        <h4>Jane Smith</h4>
                        <p>Scrum Master</p>
                    </div>
                </div>
            </div>

            <!-- Middle Row: Development -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team3.jpg') }}" class="img-fluid" alt="">
                        <h4>Michael Brown</h4>
                        <p>Frontend Developer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team4.jpg') }}" class="img-fluid" alt="">
                        <h4>Emily Davis</h4>
                        <p>Backend Developer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team5.jpg') }}" class="img-fluid" alt="">
                        <h4>Chris Wilson</h4>
                        <p>Full Stack Developer</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Creative Media -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team6.jpg') }}" class="img-fluid" alt="">
                        <h4>Sarah Johnson</h4>
                        <p>Graphic Designer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <img src="{{ asset('assets/rpl.img/team7.jpg') }}" class="img-fluid" alt="">
                        <h4>Tom Lee</h4>
                        <p>Video Editor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
