@extends('layouts.app') @section('content') @push('styles') @livewireStyles
@endpush
<div class="container">
    <livewire:user.table />
</div>
@push('scripts') @livewireScripts @endpush @endsection
