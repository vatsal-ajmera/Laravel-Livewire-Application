<!-- Header -->
<div class="header">
    <!-- Logo -->
    <div class="header-left active">
        <a href="{{ url('/') }}" class="logo logo-normal">
            {{ config('app.name', 'Laravel') }}
        </a>
        <a href="{{ url('/') }}" class="logo logo-white">
            {{ config('app.name', 'Laravel') }}
        </a>
        <a href="{{ url('/') }}" class="logo-small">
            {{ config('app.name', 'Laravel') }}
        </a>
        @auth
            <a id="toggle_btn" href="javascript:void(0);">
                <i data-feather="chevrons-left" class="feather-16"></i>
            </a>
        @endauth
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Menu -->
    <ul class="nav user-menu">

        <!-- Search -->
        <li class="nav-item nav-searchinputs">
        </li>
        <!-- /Search -->

        <li class="nav-item nav-item-box">
            <a href="javascript:void(0);" id="btnFullscreen">
                <i data-feather="maximize"></i>
            </a>
        </li>
        @guest
            <li class="nav-item nav-item-box">
                <a href="{{ route('login') }}"><i class="fa fa-unlock-alt" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-unlock-alt" aria-label="fa fa-unlock-alt"></i></a>
                
            </li>
            <li class="nav-item nav-item-box">
                <a href="{{ route('register') }}"><i class="fa fa-user-plus" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-user-plus" aria-label="fa fa-user-plus"></i></a>
            </li>
        @else
            <li class="nav-item nav-item-box">
                <a href="generalsettings.html"><i data-feather="settings"></i></a>
            </li>
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-info">
                        <span class="user-letter">
                            <img src="assets/img/profiles/avator1.jpg" alt="" class="img-fluid">
                        </span>
                        <span class="user-detail">
                            <span class="user-name">{{ Auth::user()->name }}</span>
                            <span class="user-role">Super Admin</span>
                        </span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                            <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                                <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6>{{ Auth::user()->name }}</h6>
                                <h5>Super Admin</h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                            Profile</a>
                        <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                data-feather="settings"></i>Settings</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <img src="assets/img/icons/log-out.svg"
                                class="me-2" alt="img">Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        @endguest
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>
<!-- Header -->
