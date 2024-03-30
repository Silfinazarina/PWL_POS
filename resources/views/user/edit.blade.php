@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Update')

{{-- content body main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>

            <form method="post" action="{{ route('/user/edit_simpan', $data->user_id)}}">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label>Level ID</label>
                        <select class="form-control" name="levelID" id="levelID" aria-valuenow="{{$data->level_id}}">
                            @foreach ($levelIds as $levelId)
                                <option>{{ $levelId }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{$data->username}}">
                      </div>
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Isi jika ingin mengubah">
                      </div>
                        <button type = "submit" class ="btn btn-primary">Submit</button>
                      </div>
            </form>
        </div>
    </div>
@endsection