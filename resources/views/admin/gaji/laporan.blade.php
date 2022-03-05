@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@endsection
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class = "card-header">
        <button onclick = "window.print()" class = "btn btn-primary"><i class = "fa fa-print">Print</i></button>
</div>




        <!-- /.card-heading -->
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
                                    <th>Lembur</th>
                                    <th>Potongan</th>
                                    <th>Total</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($laporan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->karyawan->nama_karyawan }}</td>
                                        <td>{{ $data->jabatan->nama_jabatan }}</td>
                                        <td>Rp. {{ number_format ($data->jabatan->gaji_pokok) }}</td>
        
                                        <td>Rp. {{ number_format($data->tunjangan) }}</td>
                                        <td>Rp. {{ number_format ($data->lembur) }}</td>
                                        <td>Rp. {{ number_format ($data->potongan) }}</td>
                                        <td>Rp. {{ number_format ($data->total) }}</td>
                                        </tr>
                                         @endforeach
                                
                        </tbody>
                   </table>
                </div>
               <!-- /.table-responsive -->
            </div>
        <!-- /.card-body -->
            </div>
            </div>

    
    

@endsection