@extends('adminlte::page')

@section('title', 'Data Karyawan')

@section('content_header')

@stop

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Karyawan</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" value="{{ $karyawan->user->name }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{ $karyawan->user->email }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <br>
                            <input type="text" name="" class="form-control"
                                value="{{ $karyawan->jabatan->nama_jabatan }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="ttl" value="{{ $karyawan->ttl }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jk" value="{{ $karyawan->jk }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" name="agama" value="{{ $karyawan->agama }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" value="{{ $karyawan->alamat }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor HP</label>
                            <input type="text" name="no_tlp" value="{{ $karyawan->no_tlp }}" class="form-control"
                                readonly>
                        </div>

                        <div class="form-group">
                            <br>
                            <a href="{{ url('admin/karyawan') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
