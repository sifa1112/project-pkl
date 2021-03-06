@extends('adminlte::page')

@section('title', 'Data Jabatan')

@section('content_header')

@stop

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Data Jabatan</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Jabatan</label>
                            <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Gaji Pokok</label>
                            <input type="text" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tunjangan</label>
                        <input type="number" name="tunjangan" value="{{ $jabatan->tunjangan }}" class="form-control"
                            readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ url('admin/jabatan') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
