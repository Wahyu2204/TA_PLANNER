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
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#" onclick="@if(auth()->user()->role == 'dosen') getAllUserKirim() @else getChat({{ auth()->user()->relatedDosen[0]->id }}) @endif">
                    <img src="{{ asset('assets/rpl.img/icon') }}/chat.png" alt="Chat Icon" width="25px">
                </a>
                <div id="chat-wrapper" class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div id="parent-chat" class="card {{ auth()->user()->role == 'mahasiswa' ? 'hide' : '' }}" style="height: 400px;">
                    </div>
                    <div id="child-chat" class="card {{ auth()->user()->role == 'dosen' ? 'hide' : '' }}" style="height: 400px;">
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <img src="{{ asset('assets/rpl.img/icon') }}/bell.png" alt="Bell Icon" width="25px">
                    <h6 id="notif-count" class="navbar-badge badge text-bg-warning"></h6>
                </a>
                <div id="notif" class="dropdown-menu dropdown-menu-lg dropdown-menu-end" style="height: 400px;overflow-y:auto;overflow-x:hidden;">
                </div>
            </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ auth()->user()->photo_profile }}" class="user-image rounded-circle shadow"
                        alt="User Image" style="margin-top: 0" />
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" style="width:100%;min-width:140px;overflow-y:auto;overflow-x:hidden;">
                    <div class="dropdown-item">
                        <a href="{{ route('profile', ['id' => auth()->user()->id]) }}">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/rpl.img') }}/account.png" width="20px" height="20px" alt="Account Logo">
                                </div>
                                <p class="col-8 d-flex align-items-center">Profil</p>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="#" onclick="notifLogout('/')">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/rpl.img') }}/logout.png" width="20px" height="20px" alt="Logout Logo">
                                </div>
                                <p class="col-8 d-flex align-items-center">Log Out</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
