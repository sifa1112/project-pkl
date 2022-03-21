{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <center><b>
            <marquee>
                <h1>𝓦𝓮𝓵𝓬𝓸𝓶𝓮 𝓣𝓸 𝓚𝓱𝓪𝓻𝓲𝓼𝓶𝓪 𝓕𝓲𝓷𝓪𝓷𝓬𝓮</h1>
            </marquee>
        </b></center><br>

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('jabatan.index') }}">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ DB::table('jabatan')->count() }}</h3>
                            <p>Total jabatan</p>
                        </div>
                        <div class="icon">
                            <i class="ion far far-fw fad fa-list-alt"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('karyawan.index') }}">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ DB::table('karyawan')->count() }}</h3>
                            <p>Total karyawan</p>
                        </div>
                        <div class="icon">
                            <i class="ion far fa-address-card"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="{{ route('gaji.index') }}">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ DB::table('gaji')->count() }}</h3>
                            <p>Total gaji</p>
                        </div>
                        <div class="icon">
                            <i class="ion fas fa-users"></i>
                        </div>
                    </div>

                </a>
                <!-- ./col -->


            </div>
            <div class="col-xl-12">
                <div id="home">
                </div>

            </div>
        </div>
    @endsection --}}


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

@section('content')
    <center>
        {{-- <marquee><h1>𝓦𝓮𝓵𝓬𝓸𝓶𝓮 𝓣𝓸 𝓚𝓱𝓪𝓻𝓲𝓼𝓶𝓪 𝓕𝓲𝓷𝓪𝓷𝓬𝓮</h1></marquee> --}}
        <img src="1.jpg" style="width:100%" />
    </center>
@stop

@section('css')

@stop

@section('js')

@stop
