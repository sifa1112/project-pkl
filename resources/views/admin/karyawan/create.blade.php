@extends('adminlte::page')

@section('title', 'Data Karyawan')

@section('content_header')

@stop

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data Karyawan</div>
                    <div class="card-body">
                        <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
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
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control @error('ttl') is-invalid @enderror">
                                @error('ttl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <input type="radio" name="jk" value="Laki-Laki">Laki-laki</b>
                                <input type="radio" name="jk" value="Perempuan">Perempuan

                                </input>
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label><br>
                                <input type="radio" name="agama" value="Islam">Islam</b>
                                <input type="radio" name="agama" value="Protestan">Protestan</b>
                                <input type="radio" name="agama" value="Katolik">Katolik</b>
                                <input type="radio" name="agama" value="Hindu">Hindu</b>
                                <input type="radio" name="agama" value="Bundha">Bundha</b>
                                <input type="radio" name="agama" value="Khonghucu">Khonghucu</b>
                                <input type="radio" name="agama" value="Tidak Ada">Tidak Ada

                                </input>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea> @error('alamat') is-invalid
                                @enderror
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nomor HP</label>
                                <input type="number" name="no_tlp"
                                    class="form-control @error('no_tlp') is-invalid @enderror">
                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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
