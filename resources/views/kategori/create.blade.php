@extends('layouts.app')

{{--Customize layuot section--}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')



{{--Content body: main page content--}}
    @section('content')

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat kategori baru</h3>
            </div>

            <form method="post" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" id="kodeKategori" name="kodeKategori" placeholder="Masukkan kode kategori" 
                            class="form-control @error('kodeKategori') is-invalid @enderror">
                        @error('kodeKategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" id="namaKategori" name="namaKategori" placeholder="Masukkan nama kategori" 
                            class="form-control @error('namaKategori') is-invalid @enderror">
                        @error('namaKategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection  

{{-- @endsection
@endsection    
@endsection --}}