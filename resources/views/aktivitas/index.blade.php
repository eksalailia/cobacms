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
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center">Data Kegiatan</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Aktivitas</h6>
                        </div>
                        <div class="content">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <a href="{{ route('aktivitas.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('aktivitas.index')}}"method="GET"><br>
                        {{-- <div class="input-group custom-search-form col-sm-5">
                            <input type="search" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">&nbsp;
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </div> --}}
                        <div class="row">
                        <div class="form-group col-3" style="margin-left:20px">
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search...">
                            <button class="btn btn-secondary" type="submit"  style="font-size: 23px;margin-bottom:3px"><i class="fa fa-search"></i></button>
                        </div>
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
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Tanggal</th>
                                            <th>Author</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                @foreach ($aktivitas as $ak)
                                                <td>{{ $ak->id }}</td>
                                                <td>{{ $ak->judul }}</td>
                                                <td>{{ $ak->isi }}</td>
                                                <td>{{ $ak->tgl_aktivitas }}</td>
                                                <td>By : {{ $ak->author }}</td>
                                                <td><img alt="img" src="/img_aktv/{{ $ak->img_aktv }}" width="100px"></td>
                                                <td>
                                                    <form action="{{ route('aktivitas.destroy',$ak->id) }}" method="POST">
                                                        <a class="btn btn-info" href="{{ route('aktivitas.show',$ak->id) }}">Show <i class="fa fa-eye"></i></a>
                                                        <a href="{{ route('aktivitas.edit',$ak->id) }}" class="btn btn-success ">Edit <i class="fa fa-edit"></i></a>
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
                                {{ $aktivitas->render() }}
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
    <a class="scroll-to-top rounded" href="/admin/kegiatan">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('layouts.admin.logout')

@endsection
