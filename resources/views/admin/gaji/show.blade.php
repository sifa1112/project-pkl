@extends('adminlte::page')

@section('title', 'Dashboard')

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
                            <label for="">Nama Karyawan</label>
                            <br>
                            <input type="text" name="" class="form-control" value="{{ $gaji->karyawan->nama_karyawan }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <br>
                            <input type="text" name="" class="form-control" value="{{ $gaji->jabatan->nama_jabatan }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Gaji Pokok</label>
                            <input type="text" name="" class="form-control" value="{{ $gaji->jabatan->gaji_pokok }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tunjangan</label>
                            <input type="text" name="tunjangan" value="{{ $gaji->tunjangan }}" class="form-control"
                                readonly>
                        </div>

                        {{-- <div class="form-group">
                                <label for="">Lembur</label>
                                <input type="text" name="lembur" value="{{ $gaji->lembur }}" class="form-control" readonly>
                            </div> --}}
                        <div class="form-group">
                            <label for="">Potongan</label>
                            <input type="text" name="potongan" value="{{ $gaji->potongan }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input type="text" name="total" value="{{ $gaji->total }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ url('admin/gaji') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
