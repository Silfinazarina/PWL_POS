{{-- jobsheet 5 - 6 --}}

@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="container-responsive">
        <div class="card">
            <div class="card-header">Manage User</div>
            <div class="card-body">
                <a href="{{ route('user.create')}}" 
                class="btn btn-primary btn-xs mb-3">+ Add User
                </a>
                <div class="table-responsive">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush