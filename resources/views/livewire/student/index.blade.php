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
    @endif @include('livewire.student.modal')
    <div class="card">
        <div class="card-header">
            <h4>
                Student CRUD
                <button
                    type="button"
                    class="btn btn-primary float-end"
                    data-bs-toggle="modal"
                    data-bs-target="#studentModal"
                >
                    Add New Student
                </button>
            </h4>
            <!-- Button trigger modal -->
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>course</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->city->name }}</td>
                        <td>
                            <button
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#updateStudentModal"
                                wire:click="editStudent({{ $student->id }})"
                                class="btn btn-warning"
                            >
                                Edit
                            </button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No Record</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div>{{ $students->links() }}</div>
        </div>
    </div>
</div>
