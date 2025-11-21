<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">E-Warehouse</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a wire:navigate href="{{ route("dashboard") }}" class="nav-link @yield("dashboard")">
                        <i class="nav-icon mr-2 bi bi-house-fill"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if(auth()->user()->role === "superadmin")
                    <li class="nav-header">SUPERADMIN</li>
                    <li class="nav-item">
                        <a wire:navigate href="{{ route("superadmin.user.index") }}"
                           class="nav-link @yield("menuSuperadminUsers")">
                            <i class="nav-icon mr-2 bi bi-person-circle"></i>
                            <p>Data Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate href="{{ route("superadmin.category.index") }}"
                           class="nav-link @yield("menuSuperadminCategories")">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate href="{{ route("superadmin.product.index") }}"
                           class="nav-link @yield("menuSuperadminProducts")">
                            <i class="nav-icon mr-2 bi bi-archive-fill"></i>
                            <p>Product Items</p>
                        </a>
                    </li>
                @elseif(auth()->user()->role === "admin")
                    <li class="nav-header">ADMIN</li>
                    <li class="nav-item">
                        <a wire:navigate href="{{ route("admin.product.index") }}"
                           class="nav-link @yield("menuAdminProducts")">
                            <i class="nav-icon mr-2 bi bi-archive-fill"></i>
                            <p>Product Items</p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>