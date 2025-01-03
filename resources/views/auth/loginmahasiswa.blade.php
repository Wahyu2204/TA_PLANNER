@extends('layouts.first-page.base')

@section('title', 'TA Planner | Sign In as Mahasiswa')

@section('content')
    <section id="hero" class="hero section">

        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative mt-0"
            data-aos="zoom-out">
            <div class="d-flex justify-content-center" style="background-color: #EFEFEF; margin-top: -50px;">

                <div class="d-flex flex-column align-items-center p-5">
                    <img src="{{ asset('assets/rpl.img/5.png') }}" class="img-fluid" alt="" width="50%">
                    <h1>Sign In Mahasiswa</h1>
                    <p>according to your role in this university</p>

                    <!-- Form Login -->
                    <form action="{{ route('login.process') }}" method="POST" class="w-50 mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Masukkan email" value="m@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder="Masukkan password" value="m">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
