<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create-user" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                               placeholder="John Doe">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Role<span class="text-danger">*</span></label>
                        <select wire:model="role"
                                class="form-control @error('role') is-invalid @enderror">
                            <option value="" selected>Select Role</option>
                            <option value="superadmin">Superadmin</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Email<span class="text-danger">*</span></label>
                        <input wire:model="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="example@mail.com">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Password<span class="text-danger">*</span></label>
                        <input wire:model="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="●●●●●●●●●">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group mb-1">
                        <label>Password Confirmation<span class="text-danger">*</span></label>
                        <input wire:model="password_confirmation" type="password"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               placeholder="●●●●●●●●●">
                        @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
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
