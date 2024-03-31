@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'User')
@section('content_header_title', 'Home')
{{-- @section('content_header_subtitle', 'User') --}}

@section('content')
    <div class="container-responsive">
        <div class="card">
            <div class="card-header">
                <h2>CRUD USER</h2>
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




{{-- @extends('m_user.template')
@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('m_user.create')}}"> Input User </a>
        </div>
    </div>
</div> --}}
{{-- 
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif --}}

{{-- <table class="table table-bordered"> --}}
    {{-- <tr>
        <th width="20px" class="text-center">User ID</th>
        <th width="150px" class="text-center">Level ID</th>
        <th width="200px" class="text-center">Username</th>
        <th width="200px" class="text-center">Nama</th>
        <th width="150px" class="text-center">Password</th>
        {{-- <th width="150px" class="text-center">Actions</th> --}}
    {{-- </tr> --}} 
    {{-- @foreach ($useri as $m_user)
    <tr>
        <td>{{ $m_user->user_id}}</td>
        <td>{{ $m_user->level_id}}</td>
        <td>{{ $m_user->username}}</td>
        <td>{{ $m_user->nama}}</td>
        <td>{{ $m_user->password}}</td>

        <td class="text-center">
            <form action="{{ route('m_user.destroy', $m_user->user_id)}}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id)}}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm rounded" 
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr> --}}
    {{-- @endforeach
</table>
@endsection --}}