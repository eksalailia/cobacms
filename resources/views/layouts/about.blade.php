@extends('layouts.appnew')

@include('layouts.header')

@extends('layouts.konten')

@section('content')


  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/about-header.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Sejarah & Visi Misi</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Sejarah & Visi Misi</li>
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
              <h3>Sejarah Diskominfo Kota Madiun</h3>
              <p>
                Website milik Kominfo............
              </p>
              <h3>Visi</h3><br>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Terwujudnya pelayanan informasi Kinerja Pelayanan Pemerintah Kota Madiun yang transparan dan bertanggung jawab sesuai peraturan
                    perundang-undangan yang berlaku</li>
              </ul>
              <h3>Misi</h3><br>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan pengelolaan dan pelayanan informasi yang berkualitas</li>
                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan insfrastruktur pelayanan dan kompetensi SDM pengelola PPID</li>
              </ul>
              <h3>Moto</h3><br>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Cepat dan Tepat</li>
            </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    {{-- <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Struktur Organisasi</h2>

        </div>
        <div>
            <img src="{{ asset('frontend/assets/img/organisasi.png')}}" style="height: 550px; width: 1500px;margin-left: 6px" class="img-fluid" alt="">
          </div>

        {{-- <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('{{ asset('frontend/assets/img/why-us-bg.jpg')}}')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Let's grow your business together</h3>
                    <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                    <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam quis.</h4>
                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Aliquid non alias minus</h3>
                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div> --}}

      </div>
    </section><!-- End Why Choose Us Section --> --}}

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Profil Pimpinan</h2>

        </div>

                <div class="row gy-5">
                  @foreach($semua as $all)
                    <div class="col-xl-2 col-md-6" data-aos="fade-up" data-aos-delay="100" style="margin-left: 31px">
                      <div class="team-member">
                          <div class="member-img">
                          <img src="{{asset('img_profil/'.$all->img_profil)}}" class="img-fluid" style="height:200px; width:600px; border-radius:50%" alt=""></div>
                        <div class="member-info">
                          <h4> {{$all->nama_profil}}</h4>
                          <span>{{$all->jabatan}}</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
              </div>
            </div>
    </section><!-- End Team Section --> --}}

    @include('layouts.footer')

  </main><!-- End #main -->



@endsection
