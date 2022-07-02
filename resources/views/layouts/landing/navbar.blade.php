<header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Tiara<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-item mx-0 mx-lg-1" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-item mx-0 mx-lg-1" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-item mx-0 mx-lg-1" href="{{ route('portfolios') }}">Portfolio</a></li>
          <li><a class="nav-item mx-0 mx-lg-1" href="{{ route('certificates') }}">Certificate</a></li>
          <li><a class="nav-item mx-0 mx-lg-1" href="{{ route('contact') }}">Contact</a></li>

          <div style="border-right: 1px solid #FFF;"></div>
               @guest
                    <!--  <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;{{ __('Login') }}
                        </a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">
                                <i class="fas fa-user-plus"></i>&nbsp;&nbsp;{{ __('Register') }}
                            </a>
                        </li>
                    @endif -->

                    @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard
                        </a>
                    </li>
                @endguest 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
