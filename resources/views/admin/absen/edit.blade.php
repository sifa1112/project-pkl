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
                    <div class="card-header">Edit Data Absensi</div>
                    <div class="card-body">
                        <form action="{{ route('absen.update', $absen->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <select name="karyawan_id" class="form-control @error('karyawan_id') is-invalis @enderror">
                                    <option value="">Nama Karyawan</option>
                                    @foreach ($karyawan as $data)
                                        <option value="{{ $data->id }}"
                                        {{ $data->id == $absen->karyawan_id ? 'selected="selected"' : '' }}>
                                        {{$data->nama_karyawan}}</option>
                                    @endforeach
                                </select>
                                @error('karyawan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Absen</label>
                                <input type="date" name="tanggal" value="{{ $absen->tanggal }}" class="form-control
                                    @error('tanggal') is-invalid @enderror">

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status Absen</label><br>
                                <input type="radio" name="status_absen" value="hadir">Hadir<br>
                                <input type="radio" name="status_absen" value="izin">Izin<br>
                                <input type="radio" name="status_absen" value="sakit">Sakit<br>
                                <input type="radio" name="status_absen" value="cuti">Cuti<br>
                                <input type="radio" name="status_absen" value="tk">Tanpa Keterangan<br>
                                    </input>
                                    <class="form-control @error('status_absen') is-invalid @enderror">
                                @error('status_absen')
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
