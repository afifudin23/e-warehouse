<div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="mr-1 fas fa-list-ul"></i>
                            @yield("title")
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="mr-1 bi bi-house-fill"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <i class="mr-1 fas fa-list-ul"></i>
                                @yield("title")
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <button class="btn btn-sm btn-primary">
                                <i class="mr-1 bi bi-plus-circle"></i>
                                Tambah Data
                            </button>
                        </div>

                        <div class="btn-group dropleft">
                            <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="mr-1 fas fa-file-download"></i>
                                Export
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item text-success" type="button">
                                    <i class="mr-1 fas fa-file-excel"></i>
                                    to Excel
                                </button>
                                <button class="dropdown-item text-danger" type="button">
                                    <i class="mr-1 bi bi-filetype-pdf"></i>
                                    to PDF
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    CONTENT CATEGORIES
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
</div>
