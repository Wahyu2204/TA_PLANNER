@extends('layouts.first-page.base')

@section('title', 'TA Planner | Choose Sign In')

@section('content')
    <section id="hero" class="hero section">

        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative mt-0"
            data-aos="zoom-out">
            <div class="d-flex justify-content-center" style="background-color: #EFEFEF; margin-top: -50px;">

                <div class="d-flex flex-column align-items-center p-5">
                    <img src="assets/rpl.img/5.png" class="img-fluid" alt="" width="50%">
                    <h1>Sign In</h1>
                    <p>Rencanakan TA-mu, Wujudkan Mimpimu!</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('login.dosen') }}" class="btn-get-started scrollto me-3">Dosen</a>
                        <h4 class="mx-3">Or</h4>
                        <a href="{{ route('login.mahasiswa') }}" class="btn-get-started scrollto ms-3">Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
