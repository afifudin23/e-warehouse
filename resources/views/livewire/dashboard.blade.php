<?php
$role = auth()->user()->role;
?>

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><i class="mr-1 bi bi-house-fill"></i> Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-pink">
                        <div class="inner">
                            <h3 class="text-white">{{ $totalProducts }}</h3>

                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <a wire:navigate href="{{ route("$role.product.index") }}" class="small-box-footer">More detail
                            <i class="ml-2 fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                @if($role ==="superadmin")
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-success">
                            <div class="inner">
                                <h3 class="text-white">{{ $totalCategories }}</h3>

                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-list-ul"></i>
                            </div>
                            <a wire:navigate href="{{ route("superadmin.category.index") }}" class="small-box-footer">
                                More detail <i class="ml-2 fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-info">
                            <div class="inner text-white">
                                <h3 class="text-white">{{ $totalSuperadmins }}</h3>

                                <p>Superadmins</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <a wire:navigate href="{{ route("superadmin.user.index") }}"
                               class="small-box-footer text-white">
                                More detail <i class="ml-2 fas fa-arrow-circle-right text-white"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-primary">
                            <div class="inner">
                                <h3 class="text-white">{{ $totalAdmins }}</h3>

                                <p class="text-white">Admins</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <a wire:navigate href="{{ route("superadmin.user.index") }}" class="small-box-footer">
                                More detail <i class="ml-2 fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                @endif
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>