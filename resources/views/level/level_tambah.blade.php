@extends('adminlte::page')

@section('title', 'Level')

@section('content_header')
  <h1>Level User</h1>
@stop

@section('content')
  <div class="card-body">
    <!-- general form elements disabled -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Add Level User</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form>
          <div class="form-group">
            <label>Level Kode</label>
            <input type="text" class="form-control" placeholder="Enter">
          </div>
          <div class="form-group">
            <label>Nama Level</label>
            <input type="text" class="form-control" placeholder="Enter">
          </div>
            <button type = "submit" class ="btn btn-info">Submit</button>
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