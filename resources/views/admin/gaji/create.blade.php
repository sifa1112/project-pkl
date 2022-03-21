@extends('adminlte::page')

@section('title', 'Data Gaji')

@section('content_header')


@stop

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Gaji</div>
                    <div class="card-body">
                        <form action="{{ route('gaji.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <select name="karyawan_id" class="form-control @error('karyawan_id') is-invalid @enderror">
                                    <option value="">Pilih Karyawan</option>
                                    @foreach ($karyawan as $data)
                                        <option value="{{ $data->id }}">{{ $data->user->name }}</option>
                                    @endforeach
                                </select>
                                @error('karyawan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalid @enderror">
                                    <option value="">Pilih Jabatan</option>
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            {{-- <div class="form-group">
                                <div class="form-group">
                                    <label for="">Gaji Pokok</label>
                                    <select name="jabatan_id"
                                        class="form-control @error('jabatan_id') is-invalid @enderror">
                                        @foreach ($jabatan as $data)
                                            <option value="{{ $data->id }}">{{ $data->gaji_pokok }}</option>
                                        @endforeach
                                    </select>
                                    @error('jabatan_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                            {{-- <div class="form-group">
                                <label for="">Tunjangan</label>
                                <input type="text" name="tunjangan" class="form-control @error('tunjangan') is-invalid @enderror">
                                @error('tunjangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="">Lembur</label>
                                <input type="text" name="lembur" class="form-control @error('lembur') is-invalid @enderror">
                                @error('lembur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="">Potongan</label><br>
                                <input type="checkbox" name="potongan" value="BPJS Kesehatan">BPJS Kesehatan</br>
                                <input type="checkbox" name="potongan" value="JHT">JHT</br>
                                <input type="checkbox" name="potongan" value="Jaminan Pensiun">Jaminan Pensiun</br>
                                </input>
                                @error('potongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" class="form-control @error('total') is-invalid @enderror">
                                @error('total')
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
