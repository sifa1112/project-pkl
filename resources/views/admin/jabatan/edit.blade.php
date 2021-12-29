@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard 

@stop

@section('content')
@include('layouts._flash')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Data Jabatan</div>
                    <div class="card-body">
                        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Jabatan</label>
                                <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" class="form-control
                                    @error('nama_jabatan') is-invalid @enderror">

                                @error('nama_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" class="form-control
                                    @error('gaji_pokok') is-invalid @enderror">

                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
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