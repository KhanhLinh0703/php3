    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-center">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{ route('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link">Shop</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-3 col-3 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                @if (Auth::check())
                    <div class="btn-group">
                        <a href="" class="btn border dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user text-primary"></i>
                            <span class="badge">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                @else
                    <div class="btn-group">
                        <a href="" class="btn border dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user text-primary"></i>
                            <span class="badge">Guest</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                        </div>
                    </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Topbar End -->
