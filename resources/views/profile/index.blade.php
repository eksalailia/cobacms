@extends('layouts.admin.dashboard')
@extends('layouts.konten')
@section('content')

<body id="page-top">

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


                    {{-- @include('sweetalert::alert') --}}
                        @include('layouts.admin.nav_item')

                        @include('layouts.admin.user_info')

                    </ul>

                </nav>                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="text-align: center">Data Profil</h1>
                    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                    <!-- DataTales Example -->
                    <div class="card card-primary">
              <div class="card-header"><h4 style= "font-size: 18px; font-family: Arial, Helvetica">Profile</h4></div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name" style="font-size: 16px;">Name</label>
                      <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->name }}</li>
                    </div>

                  <div class="form-group col-12">
                    <label for="email" style="font-size: 16px;">Email</label>
                    <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->email }}</li>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-12">
                      <label for="password2" class="d-block" style="font-size: 16px;">Role</label>
                      <li class="list-group-item" disabled style="font-size: 16px;">{{ Auth::user()->role }}</li>
                    </div>
                  </div>

                  <div class="form-divider">

                  <div class="form-group">
                  <div class="col-sm-12">
                  <form method="POST">
                    <button type="submit" href="{{ route('profil.edit') }}" class="btn btn-success" style="font-size: 16px;">
                     Update Profile
                    </button>
                  </div>
                </form>
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

