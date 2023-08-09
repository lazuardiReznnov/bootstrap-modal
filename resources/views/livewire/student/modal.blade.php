<!-- Modal input -->
<div
    wire:ignore.self
    class="modal fade"
    id="studentModal"
    tabindex="-1"
    aria-labelledby="studentModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentModalLabel">
                    Create Student
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    wire:click="closeModal"
                ></button>
            </div>
            <form wire:submit.prevent="saveStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Student Name</label>
                        <input
                            type="text"
                            name=""
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            wire:model="name"
                        />
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Student Email</label>
                        <input
                            type="email"
                            name=""
                            id="name"
                            class="form-control @error('email') is-invalid @enderror"
                            wire:model="email"
                        />
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Student course</label>
                        <input
                            type="text"
                            name=""
                            id="course"
                            class="form-control @error('course') is-invalid @enderror"
                            wire:model="course"
                        />
                        @error('course')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                        wire:click="closeModal"
                    >
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal update -->
<div
    wire:ignore.self
    class="modal fade"
    id="updateStudentModal"
    tabindex="-1"
    aria-labelledby="studentModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateStudentModalLabel">
                    Edit Student
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    wire:click="closeModal"
                ></button>
            </div>
            <form wire:submit.prevent="updateStudent">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name">Student Name</label>
                        <input
                            type="text"
                            name=""
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            wire:model="name"
                        />
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Student Email</label>
                        <input
                            type="email"
                            name=""
                            id="name"
                            class="form-control @error('email') is-invalid @enderror"
                            wire:model="email"
                        />
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Student course</label>
                        <input
                            type="text"
                            name=""
                            id="course"
                            class="form-control @error('course') is-invalid @enderror"
                            wire:model="course"
                        />
                        @error('course')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                        wire:click="closeModal"
                    >
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
