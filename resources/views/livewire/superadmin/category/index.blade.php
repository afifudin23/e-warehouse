<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <i class="mr-1 fas fa-list-ul"></i>
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
                            <i class="mr-1 fas fa-list-ul"></i>
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
                                data-target="#create-category">
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
                               placeholder="Search by name category...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $item)
                            <tr>
                                <td>{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button wire:click="edit('{{ $item->id }}')"
                                            class="btn btn-sm btn-warning"
                                            data-toggle="modal"
                                            data-target="#edit-category">
                                        <i class="bi bi-pencil-square text-white"></i>
                                    </button>
                                    <button wire:click="delete('{{ $item->id }}')"
                                            class="btn btn-sm btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete-category">
                                        <i class="bi bi-trash-fill text-white"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    {{-- Modal Create Category--}}
    @include("livewire.superadmin.category.create")

    {{-- Modal Edit Category--}}
    @include("livewire.superadmin.category.edit")

    {{-- Modal Delete Category--}}
    @include("livewire.superadmin.category.delete")

    {{-- Create Category Success --}}
    @script
    <script>
        $wire.on('create-category-success', () => {
            $("#create-category").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Category has been created successfully!",
                icon: "success",
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        });
        $('#create-category').on('shown.bs.modal', function () {
            $(this).find('input[wire\\:model="name"]').trigger('focus');
        });
    </script>
    @endscript

    {{-- Edit Category Success --}}
    @script
    <script>
        $wire.on('edit-category-success', () => {
            $("#edit-category").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Category has been edited successfully!",
                icon: "success",
                toast: true,
                position: "top",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });
        });
        $('#edit-category').on('shown.bs.modal', function () {
            $(this).find('input[wire\\:model="name"]').trigger('focus');
        });
    </script>
    @endscript

    {{-- Delete Category Success --}}
    @script
    <script>
        $wire.on('delete-category-success', () => {
            $("#delete-category").modal("hide")
            Swal.fire({
                title: "Success!",
                text: "Category has been deleted successfully!",
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
