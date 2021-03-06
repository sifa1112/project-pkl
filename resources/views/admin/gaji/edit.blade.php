@extends('adminlte::page')

@section('title', 'Data Gaji')

@section('content_header')

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
                            {{-- <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="karyawan_id" value="{{ $karyawan->user->name }}"
                                    class="form-control
                                    @error('user') is-invalid @enderror">

                                @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <select name="jabatan_id" class="form-control @error('jabatan_id') is-invalis @enderror">
                                    <option value="">Gaji Pokok</option>
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $gaji->jabatan_id ? 'selected="selected"' : '' }}>
                                            {{ $data->gaji_pokok }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" value="{{ $gaji->gaji_pokok }}" class="form-control
                                    @error('gaji_pokok') is-invalid @enderror">

                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="">Tunjangan</label>
                                <input type="text" name="tunjangan" value="{{ $gaji->tunjangan }}"
                                    class="form-control
                                    @error('tunjangan') is-invalid @enderror">

                                @error('tunjangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group">
                                <label for="">Lembur</label>
                                <input type="text" name="lembur" value="{{ $gaji->lembur }}" class="form-control
                                    @error('lembur') is-invalid @enderror">

                                @error('lembur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label for="">Potongan</label>
                                <input type="radio" name="potongan" value="BPJS Kesehatan">BPJS Kesehatan</b>
                                <input type="radio" name="potongan" value="JHT">JHT</b>
                                <input type="radio" name="potongan" value="Jaminan Pensiun">Jaminan Pensiun</b>
                                </input>

                                @error('potongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Total</label>
                                <input type="text" name="total" value="{{ $gaji->total }}"
                                    class="form-control
                                    @error('total') is-invalid @enderror">

                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
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
