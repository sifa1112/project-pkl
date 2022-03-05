@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Jabatan</div>
                    <div class="card-body">
                        <form action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Jabatan</label><br>
                                <input type="radio" name="nama_jabatan" value="Direksi">Direksi<br>
                                <input type="radio" name="nama_jabatan" value="Direktur Utama">Direktur Utama<br>
                                <input type="radio" name="nama_jabatan" value="Direktur Keuangan">Direktur Keuangan<br>
                                <input type="radio" name="nama_jabatan" value="Direktur Personalia">Direktur Personalia<br>
                                <input type="radio" name="nama_jabatan" value="Manager">Manager<br>
                                <input type="radio" name="nama_jabatan" value="ADM">ADM<br>
                                <input type="radio" name="nama_jabatan" value="Divisi">Divisi<br>
                                </input>
                                @error('nama_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" class="form-control @error('gaji_pokok') is-invalid @enderror">
                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')


@stop

@section('js')

@stop
