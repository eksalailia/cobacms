@extends('opd.dashboard')
@extends('opd.konten')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

          <!-- Sidebar -->
          @include('opd.sidebar')
          <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                        @include('opd.nav_item')

                        <!-- Nav Item - User Information -->
                     @include('opd.user_info')
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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Pelayanan</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        {{-- <a class="fas fa-arrow-left" href="/admin/pelayanan"></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('opd.pelayanan.edit',$pelayanan->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">

                    <label>Jenis Pelayanan</label>
                    <input type="text" id="jenis" name="jenis" class="form-control" required="" value="{{$pelayanan->jenis}}" >
                </div>
                <div class="form-group col-sm-12">

                    <label>Komponen</label>
                    <input type="text" id="komponen" name="komponen" class="form-control" required="" value="{{$pelayanan->komponen}}" >
                </div>
                <div class="form-group col-sm-12">
                    <label>Uraian</label>
                    <textarea class="ckeditor form-control valid" name="uraian" rows="5" cols="33" style="width:100%"  class="form-control" required="" >{{$pelayanan->uraian}}</textarea>
                    {{-- <input type="text" id="deskripsi" name="deskripsi" class="form-control" required="" value="{{$pelayanan->deskripsi}}" > --}}
                </div>
                <div class="form-group col-sm-12">
                <input type="submit" value="Simpan" class="btn btn-success">&nbsp;
                <a href="/opd/pelayanan" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- @include('opd.footer') --}}
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
@include('opd.logout')

@endsection
