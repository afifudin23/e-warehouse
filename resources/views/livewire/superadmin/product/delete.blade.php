<!-- Modal Delete Product -->
<div wire:ignore.self class="modal fade" id="delete-product" tabindex="-1" aria-labelledby="deleteProductLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-lg shadow-lg border-0">

            <div class="modal-header bg-danger text-white rounded-top">
                <h5 class="modal-title d-flex align-items-center" id="deleteProductLabel">
                    <i class="bi bi-trash-fill mr-2"></i>
                    Delete {{ $title }}
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <p class="mb-3 text-secondary">
                    Are you sure you want to delete this category?
                    <br><strong class="text-danger">This action cannot be undone.</strong>
                </p>

                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>

                        <tr>
                            <th class="text-secondary" width="30%">ID</th>
                            <td width="5%">:</td>
                            <td class="font-weight-bold">{{ $id }}</td>
                        </tr>

                        <tr>
                            <th class="text-secondary">Name</th>
                            <td>:</td>
                            <td class="font-weight-bold">{{ $name }}</td>
                        </tr>

                        <tr>
                            <th class="text-secondary">Price</th>
                            <td>:</td>
                            <td class="font-weight-bold">{{ $price }}</td>
                        </tr>

                        <tr>
                            <th class="text-secondary">Category Product</th>
                            <td>:</td>
                            <td class="font-weight-bold">{{ $category_name }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="bi bi-x-circle mr-1"></i> Cancel
                </button>

                <button wire:click="destroy('{{ $id }}')" type="button" class="btn btn-danger">
                    <i class="bi bi-trash-fill mr-1"></i> Delete
                </button>
            </div>

        </div>
    </div>
</div>
