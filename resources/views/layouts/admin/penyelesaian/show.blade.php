@extends('layouts.admin.dashboard')
@extends('layouts.konten')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

          <!-- Sidebar -->
          @include('layouts.admin.sidebar')
          <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    @include('layouts.admin.nav_item')
                    @include('layouts.admin.user_info')
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- S --}}
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}
            <br>
            <div class="container mt-5" >
                <div class="row justify-content-center align-items-center" style="margin-right: 170px">
                    <div class="card" style="width: 50rem; margin-left: 150px">
                        <div class="card-header">
                            <h5 style="font-size: 18px; font-family: Arial, Helvetica; text-align:center"><b>Detail Prosedur</h5></b>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><b>Judul : </b>{{$data->judul}}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Isi : </b>{!! $data->uraian!!}</li>
                                <li class="list-group-item" style="font-size: 16px;"><b>Image : </b><img src="/img/{{ $data->img }}" width="100px"></li>
                            </ul>
                        </div>
                        <a class="btn btn-success mt-3" href="{{ route('layouts.admin.penyelesaian.index') }}" style="font-size: 16px;">Kembali</a>
                    </div>
                </div>
            </div>
@endsection
