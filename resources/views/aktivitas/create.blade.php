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
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                        @include('layouts.admin.nav_item')

                        <!-- Nav Item - User Information -->
                     @include('layouts.admin.user_info')
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> --}}
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Aktivitas</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        {{-- <a class="fas fa-arrow-left" href="/admin/kegiatan"></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                                <form method="POST" action="{{ route ('aktivitas.create') }}" enctype=multipart/form-data >
                                @csrf
                                    <div class="form-group col-sm-12">
                                        <label>Judul</label>
                                        <input type="text" id="judul" name="judul" class="form-control" >
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Tanggal Aktivitas</label>
                                        <input type="date" id="tgl_aktivitas" name="tgl_aktivitas" class="form-control" >
                                    </div>
                                <div class="form-group col-sm-12">
                                    <label>Author</label>
                                    <input type="text" id="author" name="author" class="form-control" >
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>Image</label>
                                    <input type="file" id="img_aktv" name="img_aktv" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Isi</label>
                                    <textarea class="ckeditor form-control valid" id="isi" name="isi" rows="5" cols="33" style="width:100%"></textarea>
                            </div>
                                    <div class="form-group col-sm-5">
                                        <button type="submit" class="btn btn-success">Simpan</button>&nbsp;
                                        <a href="/admin/aktivitas" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- @include('layouts.admin.footer') --}}
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
