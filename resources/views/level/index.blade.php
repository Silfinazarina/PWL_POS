@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Level')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Level')

@section('content')
    <div class="container-responsive">
        <div class="card">
            <div class="card-header">Manage Level</div>
            <div class="card-body">
                <a href="{{ route('level.create')}}" 
                class="btn btn-primary btn-xs mb-3">+ Add Level
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