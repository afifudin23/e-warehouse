<div class="card-body login-card-body">
    @error("errors") <span class="text-center d-block mb-1 text-danger">*{{ $message }}</span> @enderror
    <p class="login-box-msg">Sign in to start your session</p>
    <form wire:submit.prevent="login">
        <div class=" mb-3">
            <div class="input-group">
                <input wire:model="email" type="text" class="form-control" placeholder="example@mail.com">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error("email") <small class="text-danger">*{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <div class="input-group">
                <input wire:model="password" type="password" class="form-control" placeholder="●●●●●●●●●">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error("password") <small class="text-danger">*{{ $message }}</small> @enderror
        </div>
        <p><a href="#">I forgot my password</a></p>
        <div class="row d-flex justify-content-end">
            <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </form>
</div>