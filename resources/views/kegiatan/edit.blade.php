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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <a class="fas fa-arrow-left" href="/admin/kegiatan"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('kegiatan.edit',$kegiatan->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                   
                    <label>Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" required="" value="{{$kegiatan->nama_kegiatan}}" >
                </div>
                <div class="form-group col-sm-12">
                   
                    <label>Tanggal Kegiatan</label>
                    <input type="date" id="tgl_kegiatan" name="tgl_kegiatan" class="form-control" required="" value="{{$kegiatan->tgl_kegiatan}}" >
                </div>
                <div class="form-group col-sm-12">
                   
                    <label>Deskripsi Kegiatan</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" required="" value="{{$kegiatan->deskripsi}}" >
                </div>
                <div class="form-group col-sm-12">
                <input type="submit" value="SIMPAN" class="btn btn-info">
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
