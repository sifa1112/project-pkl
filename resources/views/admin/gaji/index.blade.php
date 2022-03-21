@extends('adminlte::page')

@section('title', 'Data Gaji')

@section('content_header')


@endsection

@section('content')
    @include('layouts._flash')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Gaji
                        @role('admin')
                            <a href="{{ route('gaji.create') }}" class="btn btn-sm btn-outline-primary"
                                style="float: right">Tambah Data</a>
                        @endrole
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <table class="table" id="gaji">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Potongan</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($gaji as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->karyawan->user->name }}</td>
                                                <td>{{ $data->karyawan->jabatan->nama_jabatan }}</td>
                                                <td>Rp. {{ number_format($data->karyawan->jabatan->gaji_pokok) }}</td>
                                                <td>Rp. {{ number_format($data->karyawan->jabatan->tunjangan) }}</td>
                                                {{-- <td>{{ $data->jabatan->nama_jabatan }}</td> --}}
                                                {{-- <td>Rp. {{ number_format ($data->jabatan->gaji_pokok) }}</td> --}}
                                                {{-- <td>Rp. {{ number_format($data->gaji_pokok) }}</td> --}}
                                                {{-- <td>Rp. {{ number_format($data->jabatan->tunjangan) }}</td> --}}
                                                <td>Rp. {{ number_format($data->potongan) }}</td>
                                                <td>Rp.
                                                    {{ number_format($data->total) }}
                                                </td>
                                                {{-- <td>Rp.
                                                    {{ number_format($data->jabatan->gaji_pokok + $data->jabatan->tunjangan - $data->potongan) }}
                                                </td> --}}
                                                <td>
                                                    <form action="{{ route('gaji.destroy', $data->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        {{-- @role('admin')
                                                            <a href="{{ route('gaji.edit', $data->id) }}"
                                                                class="btn btn-outline-info">Edit</a>
                                                        @endrole --}}
                                                        {{-- <a href="{{ route('gaji.show', $data->id) }}"
                                                            class="btn btn-outline-warning">Show</a> --}}
                                                        @role('admin')
                                                            <button type="submit" class="btn btn-outline-danger"
                                                                onclick="return confirm('Are you sure?');">Delete</button>
                                                        @endrole
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection


@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#gaji').DataTable();
        });
    </script>
@endsection
