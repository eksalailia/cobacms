@extends('layouts.admin.dashboard')
@extends('layouts.konten')

@section('content')

@include('layouts.admin.sidebar')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                @include('layouts.admin.nav_item')

                @include('layouts.admin.user_info')

            </ul>
        </nav>
        <section class="section">
      <div class="container mt-3" style= "margin : auto">
        <div class="row">
          <div class="col-12 col-sm-12 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <b>Kegiatan</b>
            </div>
            <br>
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 50rem; margin-left: 150px">
                        <div class="card-header">
                            <h5 style="font-size: 18px; font-family: Arial, Helvetica"><b>Detail Data Kegiatan</h5></b>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><b>Nama Kegiatan: </b>{{$kegiatan->nama_kegiatan}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Tanggal Kegiatan: </b>{{$kegiatan->tgl_kegiatan}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Deskripsi: </b>{{$kegiatan->deskripsi}}</li>
                            </ul>
                        </div>
                        <a class="btn btn-success mt-3" href="{{ route('kegiatan.index') }}" style="font-size: 16px;">Kembali</a>
                    </div>
                </div>
            </div>
@endsection
