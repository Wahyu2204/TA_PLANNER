<nav class="app-header navbar navbar-expand bg-body" style="position: sticky;top:0;">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i style="font-size: 30px" class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <div class="input-group">
                    <input type="text" class="form-control" style="background: rgb(167, 197, 221);"
                        placeholder="Search...">
                    <span class="input-group-text" style="background: rgb(167, 197, 221);" id="basic-addon2">
                        <img src="{{ asset('assets/rpl.img/icon') }}/search.png" alt="Search Icon" width="30px">
                    </span>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <!--end::Navbar Search-->
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <img src="{{ asset('assets/rpl.img/icon') }}/chat.png" alt="Chat Icon" width="25px">
                    <h6 class="navbar-badge badge text-bg-danger">3</h6>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" style="height: 400px;overflow-y:auto;overflow-x:hidden;">
                    <div class="dropdown-item">
                        <h4 style="font-weight: bold">Jadwal Bimbingan</h4>
                        <p>Jadwal Bimbingan anda telah di ACC</p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <img src="{{ asset('assets/rpl.img/icon') }}/bell.png" alt="Bell Icon" width="25px">
                    <h6 class="navbar-badge badge text-bg-warning">15</h6>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="card" style="height: 400px;">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <img src="{{ asset('assets/rpl.img') }}/pp mahasiswa.jpeg" width="35px" height="35px" alt="Photo Profile Mahasiswa">
                                </div>
                                <div class="col">
                                    <h3 style="font-weight: bold">Asep Throttle</h3>
                                </div>
                                <div style="width: 50px">
                                    <button class="btn btn-danger">X</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="padding: 2rem;overflow-y:auto;overflow-x:hidden;">
                            <div class="row mb-3">
                                <div class="col-9 d-flex align-items-center" style="background: #eee">
                                    <p>Kamu Jawa ya?</p>
                                </div>
                                <div class="col-3">
                                    <img src="{{ asset('assets/rpl.img/') }}/pp mahasiswa.jpeg" width="35px" height="35px" alt="Photo Profile Mahasiswa">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3">
                                    <img src="{{ asset('assets/rpl.img/') }}/pp dosen.jpeg" width="35px" height="35px" alt="Photo Profile Dosen">
                                </div>
                                <div class="col-9 d-flex align-items-center" style="background: #eee">
                                    <p>Iya saya dari Jawa</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-footer">
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="d-flex justify-content-center align-items-center" style="width: 50px">
                                    <img src="{{ asset('assets/rpl.img/icon') }}/sent.png" width="30px" height="30px" alt="Sent Picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/rpl.img') }}/@yield('pp')" class="user-image rounded-circle shadow"
                        alt="User Image" style="margin-top: 0" />
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img src="{{ asset('assets/img/adminlte') }}/user2-160x160.jpg" class="rounded-circle shadow"
                            alt="User Image" />
                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2023</small>
                        </p>
                    </li>
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center"><a href="#">Followers</a></div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div>
                    </li>
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
