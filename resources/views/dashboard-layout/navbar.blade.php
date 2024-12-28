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
            <input type="text" class="form-control" style="background: rgb(167, 197, 221);" placeholder="Search...">
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
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <a href="#" class="dropdown-item">
                <div class="d-flex">
                <div class="flex-shrink-0">
                    <img
                    src="{{ asset('assets/img/adminlte') }}/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                    />
                </div>
                <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-end fs-7 text-danger"
                        ><i class="bi bi-star-fill"></i
                    ></span>
                    </h3>
                    <p class="fs-7">Call me whenever you can...</p>
                    <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                </div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <div class="d-flex">
                <div class="flex-shrink-0">
                    <img
                    src="{{ asset('assets/img/adminlte') }}/user8-128x128.jpg" alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                    />
                </div>
                <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-end fs-7 text-secondary">
                        <i class="bi bi-star-fill"></i>
                    </span>
                    </h3>
                    <p class="fs-7">I got your message bro</p>
                    <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                </div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <div class="d-flex">
                <div class="flex-shrink-0">
                    <img
                    src="{{ asset('assets/img/adminlte') }}/user3-128x128.jpg" alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                    />
                </div>
                <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-end fs-7 text-warning">
                        <i class="bi bi-star-fill"></i>
                    </span>
                    </h3>
                    <p class="fs-7">The subject goes here</p>
                    <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                </div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <img src="{{ asset('assets/rpl.img/icon') }}/bell.png" alt="Bell Icon" width="25px">
            <h6 class="navbar-badge badge text-bg-warning">15</h6>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="bi bi-envelope me-2"></i> 4 new messages
                <span class="float-end text-secondary fs-7">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="bi bi-people-fill me-2"></i> 8 friend requests
                <span class="float-end text-secondary fs-7">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                <span class="float-end text-secondary fs-7">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
            </div>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img
                src="{{ asset('assets/rpl.img') }}/@yield('pp')" class="user-image rounded-circle shadow"
                alt="User Image" style="margin-top: 0"
            />
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!--begin::User Image-->
            <li class="user-header text-bg-primary">
                <img
                src="{{ asset('assets/img/adminlte') }}/user2-160x160.jpg"
                class="rounded-circle shadow"
                alt="User Image"
                />
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