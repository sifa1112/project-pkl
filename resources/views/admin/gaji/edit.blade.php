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
                    <div class="card-header">Edit Data Gaji</div>
                    <div class="card-body">
                        <form action="{{ route('gaji.update', $gaji->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <select name="karyawan_id" class="form-control @error('karyawan_id') is-invalis @enderror">
                                    <option value="">Nama Karyawan</option>
                                    @foreach ($karyawan as $data)
                                        <option value="{{ $data->id }}"
                                        {{ $data->id == $gaji->karyawan_id ? 'selected="selected"' : '' }}>
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
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalis @enderror">
                                    <option value="">Jabatan</option>
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}"
                                        {{ $data->id == $gaji->jabatan_id ? 'selected="selected"' : '' }}>
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
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" value="{{ $gaji->gaji_pokok }}" class="form-control
                                    @error('gaji_pokok') is-invalid @enderror">

                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tunjangan</label>
                                <input type="text" name="tunjangan" value="{{ $gaji->tunjangan }}" class="form-control
                                    @error('tunjangan') is-invalid @enderror">

                                @error('tunjangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Lembur</label>
                                <input type="text" name="lembur" value="{{ $gaji->lembur }}" class="form-control
                                    @error('lembur') is-invalid @enderror">

                                @error('lembur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Potongan</label>
                                <input type="text" name="potongan" value="{{ $gaji->potongan }}" class="form-control
                                    @error('potongan') is-invalid @enderror">

                                @error('potongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" value="{{ $gaji->total }}" class="form-control
                                    @error('total') is-invalid @enderror">

                                @error('total')
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
