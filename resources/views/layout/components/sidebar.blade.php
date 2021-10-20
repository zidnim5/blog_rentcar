<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ ucfirst(auth()->user()->name) ?? ''}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link @yield('active-home')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            @lang('main.dashboard')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link @yield('active-user')">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            @lang('main.user')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('articles.index') }}" class="nav-link @yield('active-article')">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            @lang('main.car')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galery.index') }}" class="nav-link @yield('active-galery')">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            @lang('main.galery')
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link @yield('active-contact')">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            @lang('main.contact')
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <hr style="border-color:#5a5656">
                </li>
                <!-- <li class="nav-header">@lang('permission')</li> -->
                <li class="nav-item">
                    <a href="{{ route('permission.index') }}" class="nav-link @yield('active-permission')">
                        <i class="nav-icon fa fa-key"></i>
                        <p>
                            @lang('permission')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link @yield('active-role')">
                        <i class="nav-icon fa fa-key"></i>
                        <p>
                            @lang('main.role')
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>