@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Update')

{{-- content body main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Level</h3>
            </div>

            <form method="post" action="{{ route('level.edit_simpan', $data->level_id)}}">
                @csrf
                @method('PUT')

                <div class="card-body">
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label>Level Kode</label>
                        <input type="text" class="form-control" name="levelKode" id="levelKode" value="{{$data->level_kode}}">
                      </div>
                      <div class="form-group">
                        <label>Nama Level</label>
                        <input type="text" class="form-control" name="levelNama" id="levelNama" value="{{$data->level_nama}}">
                      </div>
                        <button type = "submit" class ="btn btn-info">Submit</button>
                      </div>
                    </form>
                  </div>
            </form>
        </div>
    </div>
@endsection