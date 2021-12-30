@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard 

@stop

@section('content')
@include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Gaji
                        <a href="{{ route('gaji.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tunjangan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                    
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($gaji as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Rp. {{ number_format($data->gaji_pokok) }}</td>
                                        <td>{{ $data->tunjangan }}</td>
                                        <td>{{ $data->karyawan->nama_karyawan }}</td>
                                        <td>{{ $data->jabatan->nama_jabatan }}</td>
                                        <td>
                                            <form action="{{ route('gaji.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('gaji.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('gaji.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
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