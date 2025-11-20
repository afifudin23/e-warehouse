<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('adminlte3/dist/img/user2-160x160.jpg')}}"
                     class="user-image img-circle"
                     alt="User Image">
                <span class="d-none d-md-inline">Andev</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{asset('adminlte3/dist/img/user2-160x160.jpg')}}" class="img-circle"
                         alt="User Image">

                    <div>
                        <p>Andev</p>
                        <p class="d-inline badge badge-success">SUPERADMIN</p>
                    </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-danger float-right">
                            <i class="fas fa-sign-out-alt"></i>
                            Sign out
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>