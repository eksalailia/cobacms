
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

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    @include('opd.nav_item')
                    @include('opd.user_info')
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center">Standar Pelayanan</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Standar Pelayanan</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <a href="{{ route('opd.pelayanan.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('opd.pelayanan.index')}}" style="margin-top: 20px" method="GET">
                            <div class="form-group col-3" style="margin-left:8px">
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search...">
                                <button class="btn btn-secondary" type="submit"  style="font-size: 23px;margin-bottom:3px"><i class="fa fa-search"></i></button>
                            </form>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    </form>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Pelayanan</th>
                                            <th>Komponen</th>
                                            <th>Uraian</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                @foreach ($pelayanan as $data)
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->jenis}}</td>
                                                <td>{!! $data->komponen !!}</td>
                                                <td>{!! $data->uraian !!}</td>
                                                <td>
                                                    <form action="" method="POST">
                                                        <a class="btn btn-info" href="{{ route('opd.pelayanan.show',$data->id) }}">Show <i class="fa fa-eye"></i></a>
                                                        <a href="{{route('opd.pelayanan.edit',$data->id)}}" class="btn btn-success ">Edit <i class="fa fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </thead>
                                </table>
                                  {{-- Menampilan Paginasi --}}
                                {{ $pelayanan->render() }}
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           @include('opd.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('opd.logout')

@endsection
