<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <i class="mr-1 bi bi-archive-fill"></i>
                        {{ $title }}
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
                            <i class="mr-1 bi bi-archive-fill"></i>
                            {{ $title }}
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
                        <button wire:click="create" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#create-product">
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
                            <button wire:click="exportExcel" class="dropdown-item text-success" type="button">
                                <i class="mr-1 fas fa-file-excel"></i>
                                to Excel
                            </button>
                            <button wire:click="exportPDF" class="dropdown-item text-danger" type="button">
                                <i class="mr-1 bi bi-filetype-pdf"></i>
                                to PDF
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="mb-3 d-flex justify-content-between">
                    <div class="col-2">
                        <select wire:model.live="paginate" class="form-control">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <input wire:model.live="search" type="text" class="form-control"
                               placeholder="Search by product name...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Product Category</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td>{{ $item->category?->name ?? '-' }}</td>
                                <td>
                                    <button wire:click="edit('{{ $item->id }}')"
                                            class="btn btn-sm btn-warning"
                                            data-toggle="modal"
                                            data-target="#edit-product">
                                        <i class="bi bi-pencil-square text-white"></i>
                                    </button>
                                    <button wire:click="delete('{{ $item->id }}')"
                                            class="btn btn-sm btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete-product">
                                        <i class="bi bi-trash-fill text-white"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    {{-- Modal Create Product--}}
    @include("livewire.superadmin.product.create")

    {{-- Modal Edit Product--}}
    @include("livewire.superadmin.product.edit")

    {{-- Modal Delete Product--}}
    @include("livewire.superadmin.product.delete")

    {{-- Create Product Success --}}
    @script
    <script>
        $wire.on('create-product-success', () => {
            $("#create-product").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Product has been created successfully!",
                icon: "success",
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        });
        $('#create-product').on('shown.bs.modal', function () {
            $(this).find('input[wire\\:model="name"]').trigger('focus');
        });
    </script>
    @endscript

    {{-- Edit Product Success --}}
    @script
    <script>
        $wire.on('edit-product-success', () => {
            $("#edit-product").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Product has been edited successfully!",
                icon: "success",
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        });
        $('#edit-product').on('shown.bs.modal', function () {
            $(this).find('input[wire\\:model="name"]').trigger('focus');
        });
    </script>
    @endscript

    {{-- Delete Product Success --}}
    @script
    <script>
        $wire.on('delete-product-success', () => {
            $("#delete-product").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Product has been deleted successfully!",
                icon: "success",
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        });
    </script>
    @endscript

</div>
