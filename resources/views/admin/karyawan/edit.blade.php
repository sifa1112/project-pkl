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
                    <div class="card-header">Edit Data Karyawan</div>
                    <div class="card-body">
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" class="form-control
                                    @error('nama_karyawan') is-invalid @enderror">

                                @error('nama_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tempat & Tanggal Lahir</label>
                                <input type="date" name="ttl" value="{{ $karyawan->ttl }}" class="form-control
                                    @error('ttl') is-invalid @enderror">

                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="radio" name="jk" value="laki-laki">Laki-laki</b>
                                <input type="radio" name="jk" value="perempuan">Perempuan

                                    </input>
                                    <class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama">
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="budha">Budha</option>
                                <option value="hindu">Hindu</option>
                                </select>
                                    <class="form-control @error('agama') is-invalid @enderror">
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat"  value="{{ $karyawan->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nomor HP</label>
                                <input type="text" name="no_tlp"  value="{{ $karyawan->no_tlp }}"
                                    class="form-control @error('no_tlp') is-invalid @enderror">
                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalis @enderror">
                                    <option value="">Data jabatan</option>
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}"
                                        {{ $data->id == $karyawan->jabatan_id ? 'selected="selected"' : '' }}>
                                        {{$data->nama_jabatan}}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
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
