@extends('layouts.app') @section('content') @push('styles') @livewireStyles
@endpush
<div class="container">
    <div class="row">
        <div class="col-md">
            <h2>Student Data</h2>
            <livewire:student.index />
        </div>
    </div>
</div>

@push('scripts') @livewireScripts

<script>
    window.addEventListener("close-modal", (event) => {
        $("#studentModal").modal("hide");
        $("#updateStudentModal").modal("hide");
    });
</script>
@endpush @endsection
