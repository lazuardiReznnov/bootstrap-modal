<div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="userId" />
        <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="floatingInput"
                placeholder="yourname"
                name="name"
                wire:model="name"
            />
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="floatingInput"
                placeholder="name@example.com"
                name="email"
                wire:model="email"
            />
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <label for="floatingInput">Email address</label>
        </div>

        <div class="my-3">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
