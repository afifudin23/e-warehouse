<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create-category" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form wire:submit.prevent="store">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="mr-1 bi bi-plus-circle"></i> Add {{ $title }}
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label>Category Name<span class="text-danger">*</span></label>
                        <input wire:model="name" type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="e.g., Tools, Packaging, Accessories">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="fas fa-check-circle mr-1"></i> Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
