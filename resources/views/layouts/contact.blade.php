@extends('layouts.appnew')


  <!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

<body class="page-contact">

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/kontak.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Kontak</h2>
        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li>Kontak</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Lokasi :</h4>
                <p>Jl. Perintis Kemerdekaan No 32, Kota Madiun</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email :</h4>
                <p>kominfo@madiunkota.go.id</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Telepon :</h4>
                <p>(0351) 467327</p>
              </div>
            </div>

            <div class="info-item d-flex">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                  <h4>WhatsApp :</h4>
                  <p>0811-3577-800</p>
                </div>
              </div>
            <!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

          <form class="form-contact contact_form" action="{{route('saran.store')}}" method="post" id="contactForm" novalidate="novalidate">
               @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                </div>
              </div>
              <div class="form-group mt-3">
              <input class="form-control" name="subjek" id="subjek" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
              <textarea class="form-control w-100" name="pesan" id="pesan" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter pesan'" placeholder=" Masukkan pesan" required></textarea>
              </div>
              <div class="text-center"><br>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
    @include('layouts.footer')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

 @endsection
