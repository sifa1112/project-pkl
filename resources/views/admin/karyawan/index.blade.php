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
                        Data Karyawan
                        <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-outline-primary"
                            style="float: right">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <table class="table" id="karyawan">
                                    <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Karyawan</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Nomor HP</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($karyawan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_karyawan }}</td>
                                        <td>{{ $data->ttl }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->agama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_tlp }}</td>
                                        <td>{{ $data->jabatan->nama_jabatan }}</td>
                                        <td>
                                            <form action="{{ route('karyawan.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('karyawan.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('karyawan.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure for delete it?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css')}}">
    @endsection


@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#karyawan').DataTable();
        });
        </script>
@endsection
