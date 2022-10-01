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
              <btn1><h4><b>Kepala Dinas</b> </h4></btn1><br>
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
                    <li><i class="bi bi-circle-fill"></i>Penyusunan rumusan kebijakan teknis di bidang
                    komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Penyelenggaraan urusan pemerintahan dan pelayanan
                    umum di bidang komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pembinaan dan pelaksanaan tugas di bidang
                        komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pemantauan, evaluasi dan pelaporan di bidang
                        komunikasi dan informatika, statistik, dan persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan tugas lain yang bersifat kedinasan yang
                        diberikan oleh Walikota sesuai dengan bidangnya</li>
                </ul>
              </ol>
              <btn2><h4><b>Sekretariat</b></h4></btn2><br>
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
                    <li><i class="bi bi-circle-fill"></i>Perumusan kebijakan teknis, penyusunan
                        perencanaan program kerja, dan evaluasi pelaksanaan
                        tugas-tugas pada Sekretariat</li>
                    <li><i class="bi bi-circle-fill"></i>Pengoordinasian penyusunan program kegiatan,
                        pelayanan administratif, dan penyelenggaraan tugastugas bidang secara terpadu</li>
                    <li><i class="bi bi-circle-fill"></i>pengelolaan administrasi umum, rumah tangga, dan
                        perlengkapan</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan urusan kehumasan, keprotokolan, dan
                        kearsipan di lingkungan Dinas</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan administrasi dan pembinaan kepegawaian
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan administrasi keuangan dan pembayaran
                        gaji pegawai di lingkungan Dinas</li>
                    <li><i class="bi bi-circle-fill"></i>Penyusunan rencana program pelaksanaan
                        pemeliharaan, rehabilitasi sedang dan berat prasarana
                        di lingkungan Dinas</li>
                    <li><i class="bi bi-circle-fill"></i>Penyusunan rencana program pelaksanaan
                        pengadaan/pemeliharaan sarana di lingkungan
                        Dinas</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan tugas lain yang bersifat kedinasan
                        yang diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
              <ol>
              <ul id="div6">
                <h5><b>Sekretariat terdiri atas : </b></h5><br>
                <li><i class="bi bi-circle-fill"></i>Sub Bagian Umum dan Keuangan</li>
                <li><i class="bi bi-circle-fill"></i>Sub Bagian Perencanaan dan Kepegawaian</li>
              </ul>
            </ol>
            <btn3><h4><b>Bidang Pengelolaan Informasi dan Komunikasi Publik</b></h4></btn3><br>
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
                    <li><i class="bi bi-circle-fill"></i>Penyusunaan kebijakan teknis, perencanaan, program
                        kerja, dan evaluasi pelaksanaan tugas-tugas pada
                        Bidang Pengelolaan Informasi dan Komunikasi Publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan monitoring opini dan aspirasi publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan monitoring informasi dan penetapan
                        agenda prioritas komunikasi Pemerintah Daerah</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan konten dan perencanaan media
                        komunikasi publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan media komunikasi publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan pelayanan informasi publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan layanan hubungan media</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan kemitraan dengan pemangku
                        kepentingan</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan manajemen komunikasi krisis</li>
                    <li><i class="bi bi-circle-fill"></i>Penguatan kapasitas sumber daya komunikasi
                        publik</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan tugas lain yang bersifat kedinasan yang
                        diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
              <btn4><h4><b>Bidang Pengelolaan Teknologi Informasi dan Komunikasi</b></h4></btn4><br>
              <ol>
              <ul id="div10">
                <h5><b>Tugas Pokok : </b></h5><br>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Teknologi Informasi dan Komunikasi.</li>
              </ul>
              </ol>
                <ol>
                <ul id="div11">
                  <h5><b>Fungsi : </b></h5><br>
                    <li><i class="bi bi-circle-fill"></i>Penyusunan kebijakan teknis, perencanaan, program
                        kerja dan evaluasi pelaksanaan tugas-tugas pada
                        Bidang Pengelolaan Teknologi Informasi dan
                        Komunikasi</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan rencana induk dan anggaran
                        pemerintahan berbasis elektronik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan nama domain</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan pusat data</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan sistem jaringan intra Pemerintah Daerah</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan sistem komunikasi intra Pemerintah
                        Daerah</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan data dan informasi elektronik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan aplikasi dan proses bisnis pemerintahan
                        berbasis elektronik</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan sistem penghubung layanan pemerintah</li>
                    <li><i class="bi bi-circle-alt"></i>Pengelolaan ekosistem kota cerdas</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan sumber daya teknologi informasi dan
                        komunikasi Pemerintah Daerah</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan Government Chief Information Officer</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan tugas lain yang bersifat kedinasan yang
                        diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
              <btn5><h4><b>Bidang Pengelolaan Statistik dan Persandian</b></h4></btn5><br>
              <ol>
              <ul id="div12">
                <h5><b>Tugas Pokok : </b></h5><br>
                <li><i class="bi bi-check-circle-fill">
                    </i>Melaksanakan sebagian tugas Dinas yang meliputi penyiapan perumusan dan pelaksanaan kebijakan, penyusunan
                    norma, standar, prosedur dan kriteria dan pemberian bimbingaan teknis dan supervisi, serta pemantauan,
                    evaluasi, dan pelaporan di Bidang Pengelolaan Statistik dan Persandian.</li>
              </ul>
              </ol>
              <ol>
                <ul id="div13">
                  <h5><b>Fungsi : </b></h5><br>
                    <li><i class="bi bi-circle-fill"></i>Penyusunan kebijakan teknis, perencanaan, program
                        kerja dan evaluasi pelaksanaan tugas-tugas pada
                        Bidang Pengelolaan Statistik dan Persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Penetapan, perencanaan teknis operasional program
                        pengumpulan data statistik, pengolahan data dan
                        diseminasi statistik serta persandian sesuai dengan
                        norma, standar, prosedur dan kriteria yang ditetapkan
                        Pemerintah</li>
                    <li><i class="bi bi-circle-fill"></i>Penyelenggaraan administrasi di Bidang Pengelolaan
                        Statistik dan Persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pengelolaan program dan kegiatan di Bidang
                        Pengelolaan Statistik dan Persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan evaluasi dan pelaporan program dan
                        kegiatan di Bidang Pengelolaan Statistik dan
                        Persandian</li>
                    <li><i class="bi bi-circle-fill"></i>Pelaksanaan tugas lain yang bersifat kedinasan yang
                        diberikan oleh Kepala Dinas</li>
                </ul>
              </ol>
              <ol>
              <ul id="div14">
                <h5><b>Bidang Pengelolaan Statistik dan Persandian terdiri atas : </b></h5><br>
                <li><i class="bi bi-circle-fill"></i>Seksi pengelolaan data dan statistik</li>
                <li><i class="bi bi-circle-fill"></i>Seksi pengelolaan keamanan informasi dan persandian</li>
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
