<div class="container">
    <div class="card my-5">
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="form-group mb-3">
                    <label for="" >Name</label>
                    <input type="text" wire:model="name" class="form-control mb-3">
                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="" >Email</label>
                    <input type="text" wire:model="email" class="form-control mb-3">
                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="" >Password</label>
                    <input type="text" wire:model="password" class="form-control mb-3">
                    @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-outline-primary">Confirm</button>
            </form>
        </div>
    </div>
</div>
