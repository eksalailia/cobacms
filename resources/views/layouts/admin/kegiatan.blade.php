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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <a href="{{ route('layouts.admin.create_kegiatan') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('layouts.admin.kegiatan')}}"method="GET">
                        <div class="input-group custom-search-form col-md-5">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">&nbsp;
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </div>
                    </form>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                @foreach ($kegiatan as $kegiatans)
                                                <td>{{ $kegiatans->id }}</td>
                                                <td>{{ $kegiatans->nama_kegiatan }}</td>
                                                <td>{{ $kegiatans->tgl_kegiatan }}</td>
                                                <td>{{ $kegiatans->deskripsi }}</td>
                                                <td>
                                                    <form action="{{ route('kegiatan.destroy',$kegiatans->id) }}" method="POST">
                                                        <a class="btn btn-info" href="{{ route('kegiatan.show',$kegiatans->id) }}">Show</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    {{-- </form> --}}
                                                </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('layouts.admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('layouts.admin.logout')

@endsection
