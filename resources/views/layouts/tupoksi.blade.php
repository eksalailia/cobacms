@extends('layouts.appnew')

@include('layouts.header')

@extends('layouts.konten')

@section('content')


  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/about-header.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Tugas Pokok dan Fungsi</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Tugas Pokok dan Fungsi</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="{{ asset('frontend/assets/img/gcio.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Tugas Pokok dan Fungsi</h3>
              <p>
                Website milik Kominfo............
              </p>
              <h4><b>Visi dan Misi</b></h4><br>
              <ul>
                <h5>Visi : </h5>
                <li><i class="bi bi-check-circle-fill"></i> Terwujudnya pelayanan informasi Kinerja Pelayanan Pemerintah Kota Madiun yang transparan dan bertanggung jawab sesuai peraturan
                    perundang-undangan yang berlaku</li>
              </ul>
              <ul>
                <h5>Misi : </h5>
                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan pengelolaan dan pelayanan informasi yang berkualitas</li>
                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan insfrastruktur pelayanan dan kompetensi SDM pengelola PPID</li>
              </ul>
              <h4><b>Moto</b></h4><br>
              <ul>
                <h5>Moto : </h5>
                <li><i class="bi bi-check-circle-fill"></i> Cepat dan Tepat</li>
            </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    </section><!-- End Team Section -->

    @include('layouts.footer')

  </main><!-- End #main -->



@endsection
