<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user/' . Auth::user()->avatar) }}" class="img-circle elevation-2 bg-light" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Landing Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">
                                <i class="far fa-id-badge nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('certificates') }}" class="nav-link">
                                <i class="fas fa-th-large nav-icon"></i>
                                <p>Certificate</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolios') }}" class="nav-link">
                                <i class="fas fa-th-large nav-icon"></i>
                                <p>portfolio</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('certificates.index') }}" class="nav-link {{ request()->routeIs('certificates.index') ? 'active' : '' }}">
                        <i class="fas fa-th nav-icon"></i>
                        <p>Management Certificate</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('portfolios.index') }}" class="nav-link {{ request()->routeIs('portfolios.index') ? 'active' : '' }}">
                        <i class="fas fa-th nav-icon"></i>
                        <p>Management portfolio</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
