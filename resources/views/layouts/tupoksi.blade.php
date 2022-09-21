@extends('layouts.appnew')

@include('layouts.header')

@extends('layouts.konten')

@section('content')


  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/about-header.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Tugas Pokok & Fungsi</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Tugas Pokok & Fungsi</li>
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
              <h3>Tugas Pokok & Fungsi</h3><br>
              <btn1><h4><b>Kepala Dinas</b> </h4></btn1><br><br>
              <ol>
              <ul  id="div1">
                <h5><b>Tugas Pokok : </b></h5><br>
                <li><i class="bi bi-check-circle-fill">
                    </i>Memimpin, mengkoordinasikan dan mengawasi pelaksanaan kebijakan, evaluasi, dan bimbigan teknis
                    di bidang komunikasi, informatika, statistik dan persandian sesuai dengan ketentuan peraturan
                    perundang-undangan</li>
              </ul>
            </ol>
              <ol>
                <ul  id="div2">
                  <h5><b>Fungsi : </b></h5><br>
                    <li><i class="bi bi-1-circle"></i>Penyusunan rumusan kebijakan teknis di bidang
                    komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-2-circle"></i>Penyelenggaraan urusan pemerintahan dan pelayanan
                    umum di bidang komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-3-circle"></i>Pembinaan dan pelaksanaan tugas di bidang
                        komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-4-circle"></i>Pemantauan, evaluasi dan pelaporan di bidang
                        komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-5-circle"></i>Pelaksanaan tugas lain yang bersifat kedinasan yang
                        diberikan oleh Walikota sesuai dengan bidangnya</li>
                </ul>
              </ol>
              <btn2><h4><b>Sekretariat</b></h4></btn2><br><br>
              <ol>
              <ul id="div4">
                <h5><b>Tugas Pokok : </b></h5><br>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan kebijakan pelayanan administrasi kepada semua unsur di lingkungan Dinas meliputi perencanaan,
                    pengelolaan, administrasi umu, rumah tangga, kepegawaian, dan administrasi keuangan.</li>
              </ul>
              </ol>
              <ol>
                <ul id="div5">
                  <h5><b>Fungsi : </b></h5><br>
                    <li><i class="bi bi-1-circle"></i>Perumusan kebijakan teknis, penyusunan
                        perencanaan program kerja, dan evaluasi pelaksanaan
                        tugas-tugas pada Sekretariat</li>
                    <li><i class="bi bi-2-circle"></i>Pengoordinasian penyusunan program kegiatan,
                        pelayanan administratif, dan penyelenggaraan tugastugas bidang secara terpadu</li>
                    <li><i class="bi bi-3-circle"></i>pengelolaan administrasi umum, rumah tangga, dan
                        perlengkapan</li>
                    <li><i class="bi bi-4-circle"></i>Pengelolaan urusan kehumasan, keprotokolan, dan
                        kearsipan di lingkungan Dinas</li>
                    <li><i class="bi bi-5-circle"></i>Pengelolaan administrasi dan pembinaan kepegawaian
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-6-circle"></i>Pelaksanaan administrasi keuangan dan pembayaran
                        gaji pegawai di lingkungan Dinas</li>
                    <li><i class="bi bi-7-circle"></i>Penyusunan rencana program pelaksanaan
                        pemeliharaan, rehabilitasi sedang dan berat prasarana
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-8-circle"></i>Penyusunan rencana program pelaksanaan
                        pengadaan/pemeliharaan sarana di lingkungan
                        Dinas</li>
                    <li><i class="bi bi-9-circle"></i>Pelaksanaan tugas lain yang bersifat kedinasan
                        yang diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
              <ol>
              <ul id="div6">
                <h5><b>Sekretariat terdiri atas : </b></h5><br>
                <li><i class="bi bi-1-circle"></i>Sub Bagian Umum dan Keuangan</li>
                <li><i class="bi bi-2-circle"></i>Sub Bagian Perencanaan dan Kepegawaian</li>
              </ul>
            </ol>
            <btn3><h4><b>Bidang Pengelolaan Informasi dan Komunukasi Publik</b></h4></btn3><br><br>
              <ol>
              <ul id="div8">
                <h5><b>Tugas Pokok : </b></h5><br>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Informasi dan Komunikasi Publik.</li>
              </ul>
              </ol>
                <ol>
                <ul id="div9">
                  <h5><b>Fungsi : </b></h5><br>
                    <li><i class="bi bi-1-circle"></i>Perumusan kebijakan teknis, penyusunan
                        perencanaan program kerja, dan evaluasi pelaksanaan
                        tugas-tugas pada Sekretariat</li>
                    <li><i class="bi bi-2-circle"></i>Pengoordinasian penyusunan program kegiatan,
                        pelayanan administratif, dan penyelenggaraan tugastugas bidang secara terpadu</li>
                    <li><i class="bi bi-3-circle"></i>pengelolaan administrasi umum, rumah tangga, dan
                        perlengkapan</li>
                    <li><i class="bi bi-4-circle"></i>Pengelolaan urusan kehumasan, keprotokolan, dan
                        kearsipan di lingkungan Dinas</li>
                    <li><i class="bi bi-5-circle"></i>Pengelolaan administrasi dan pembinaan kepegawaian
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-6-circle"></i>Pelaksanaan administrasi keuangan dan pembayaran
                        gaji pegawai di lingkungan Dinas</li>
                    <li><i class="bi bi-7-circle"></i>Penyusunan rencana program pelaksanaan
                        pemeliharaan, rehabilitasi sedang dan berat prasarana
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-8-circle"></i>Penyusunan rencana program pelaksanaan
                        pengadaan/pemeliharaan sarana di lingkungan
                        Dinas</li>
                    <li><i class="bi bi-9-circle"></i>Pelaksanaan tugas lain yang bersifat kedinasan
                        yang diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
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
