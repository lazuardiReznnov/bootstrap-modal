<div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session("success") }}
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
    @endif
    <div class="row">
        <div class="col-lg my-4">
            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body">
                    @if($statusUpdate)
                    <livewire:user.update />
                    @else
                    <livewire:user.create />
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg my-4">
        <div class="card">
            <div class="card-header">Table List</div>
            <div class="card-body">
                <div class="mb3">
                    <input
                        type="text"
                        class="form-control"
                        wire:model="search"
                        placeholder="Search User"
                    />
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $index => $data)
                        <tr>
                            <th scope="row">
                                {{ $datas->firstItem() + $index }}
                            </th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a
                                    href="#"
                                    wire:click="getUser({{ $data->id }})"
                                    class="btn btn-warning"
                                    >Edit</a
                                >
                                <a
                                    href="#"
                                    wire:click="destroy({{ $data->id }})"
                                    class="btn btn-danger"
                                    >Delete</a
                                >
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $datas->links() }}
            </div>
        </div>
    </div>
</div>
