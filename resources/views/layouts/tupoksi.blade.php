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
            <img src="{{ asset('frontend/assets/img/tupoksi.png')}}" class="img-fluid" alt="">
            <img src="{{ asset('frontend/assets/img/tupoksi2.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Tugas Pokok dan Fungsi</h3><br>
              <h4><b>Kepala Dinas</b></h4><br>
              <ul>
                <li><i class="bi bi-check-circle-fill">
                    </i>Memimpin, mengkoordinasikan dan mengawasi pelaksanaan kebijakan, evaluasi, dan bimbigan teknis
                    di bidang komunikasi, informatika, statistik dan persandian sesuai dengan ketentuan peraturan
                    perundang-undangan</li>
              </ul>
              <h4><b>Sekretariat</b></h4><br>
              <ul>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan kebijakan pelayanan administrasi kepada semua unsur di lingkungan Dinas meliputi perencanaan,
                    pengelolaan, administrasi umu, rumah tangga, kepegawaian, dan administrasi keuangan.</li>
              </ul>
              <ol>
              <ul>
                <h5><b>Sekretariat terdiri atas : </b></h5><br>
                <li><i class="bi bi-1-circle"></i>Sub Bagian Umum dan Keuangan</li>
                <li><i class="bi bi-2-circle"></i>Sub Bagian Perencanaan dan Kepegawaian</li>
              </ul>
            </ol>
              <h4><b>Bidang Pengelolaan Informasi dan Komunukasi Publik</b></h4><br>
              <ul>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Informasi dan Komunikasi Publik.</li>
              </ul>
              <ul>
                <h4><b>Bidang Pengelolaan Teknologi Informasi dan Komunikasi</b></h4><br>
              <ul>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Teknologi Informasi dan Komunikasi.</li>
              </ul>
              <h4><b>Bidang Pengelolaan Statistik dan Persandian</b></h4><br>
              <ul>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Statistik dan Persandian.</li>
              </ul>
              <ol>
              <ul>
                <h5><b>Bidang Pengelolaan Statistik dan Persandian terdiri atas : </b></h5><br>
                <li><i class="bi bi-1-circle"></i>Seksi pengelolaan data dan statistik</li>
                <li><i class="bi bi-2-circle"></i>Seksi pengelolaan keamanan informasi dan persandian</li>
              </ul>
            </ol>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    </section><!-- End Team Section -->

    @include('layouts.footer')

  </main><!-- End #main -->



@endsection
