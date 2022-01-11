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
                    <div class="card-header">Data Absensi</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" value="{{ $karyawan->tanggal }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Status Absen</label>
                                <input type="text" name="status_absen" value="{{ $karyawan->status_absen }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/absen') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
