<!-- Modal -->
<div wire:ignore.self class="modal fade" id="edit-category" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form wire:submit.prevent="update('{{ $id }}')">

                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">
                        <i class="mr-1 bi bi-pencil-square"></i> Edit {{ $title }}
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Id</label>
                        <input type="text" class="form-control" disabled value="{{ $id }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Category Name<span class="text-danger">*</span></label>
                        <input wire:model="name" type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="e.g., Tools, Packaging, Accessories">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning text-white px-4">
                        <i class="mr-1 bi bi-pencil-square"></i> Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
