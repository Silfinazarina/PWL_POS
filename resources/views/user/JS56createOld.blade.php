
{{-- jobsheet 5 - 6 --}}
@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
  <h1>User</h1>
@stop

@section('content')
  <div class="card-body">
    <!-- general form elements disabled -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add User</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="post" action="../user">
          <div class="form-group">
            <label>Level ID</label>
            <select class="form-control" name="levelID" id="levelID" >
                @foreach ($levelIds as $levelId)
                    <option>{{ $levelId }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Enter"
              class="form-control @error('username') is-invalid @enderror">
            @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Enter"
              class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter"
              class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
            <button type = "submit" class ="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop