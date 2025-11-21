<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create-product" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <label>Name<span class="text-danger">*</span></label>
                        <input wire:model="name" type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="e.g., Bouquet, Vase, Ribbon">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Price<span class="text-danger">*</span></label>
                        <input wire:model="price" type="number" min="0"
                               class="form-control @error('price') is-invalid @enderror"
                               placeholder="e.g., 15000">
                        @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Category Product<span class="text-danger">*</span></label>
                        <select wire:model="category_id"
                                class="form-control @error('role') is-invalid @enderror">
                            <option value="" selected>Select Category Product</option>
                            @foreach($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
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
