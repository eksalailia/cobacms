@extends('layouts.appnew')


  <!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Diskominfo Kota Madiun</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Selamat datang di website milik Dinas Komunikasi dan Informatika Kota Madiun. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/about" class="btn-get-started">Info Lanjutan</a>
            <a href="https://www.youtube.com/watch?v=M7HwzLdqKJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Lihat video</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kegiatan Terkini</h2>
        </div>
        @foreach ($latest as $lts)
        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-5 img-bg" style="background-image: url({{ asset('img_aktv/'.$lts->img_aktv)}}"></div>
          <div class="col-xl-7 ">
            <!-- <div class="slides-1 swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide"> -->
                  <div class="item" style="margin-left: 100px; margin-top: 100px;">
                    <h3 class="mb-3">{{$lts->judul}}</h3>
                    <!-- <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4> -->
                    <p>{{substr($lts->isi,0,1000)}}...</p>
                    <a href="{{route('layouts.blog_details',$lts->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div><!-- End slide item -->

             @endforeach
              <!-- </div> -->
              <!-- <div class="swiper-pagination"></div> -->
            <!-- </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->


      </div>
    </section>
    <!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Layanan</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="https://ppid.madiunkota.go.id/" class="stretched-link">Pemberian Informasi oleh Pejabat Pengelola Informasi
                dan Dokumentasi (PPID)</a></h4>
              {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> --}}
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-megaphone" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="https://www.instagram.com/93fmsuaramadiun/?hl=id" class="stretched-link">Layanan Aspirasi dan Solusi di LPPL Radio Suara Madiun</a></h4>
              {{-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="/blog" class="stretched-link">Peliputan Kegiatan Pemerintah Kota Madiun</a></h4>
              {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-graph-up-arrow" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="https://dashboard.madiunkota.go.id" class="stretched-link">Pelayanan Data Statistik Sektoral</a></h4>
              {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-gear" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="https://servicedesk.madiunkota.go.id/" class="stretched-link">Layanan Pengaduan Masyarakat</a></h4>
              {{-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> --}}
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-telephone" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="https://wa.me/628113577800?text=Kirim Pengaduan Anda" class="stretched-link">Layanan Call Center 112</a></h4>
              {{-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p> --}}
            </div>
          </div><!-- End Service Item -->

          {{-- <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600"  style="margin-left: 380px">
            <div class="icon flex-shrink-0"><i class="bi bi-building" style="color: #961977;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Government Chief Information Officer (GCIO)</a></h4>
            </div>
          </div><!-- End Service Item --> --}}

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    {{-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Ut fugiat aliquam aut non</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section --> --}}

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Struktur Organisasi Dinas Kominfo <br>Kota Madiun</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-person-check" style="color: #ffbb2c;"></i>
                  <span>Kepala Dinas</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-person" style="color: #5578ff;"></i>
                  <span>Sekretaris Dinas</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-cash-coin" style="color: #e80368;"></i>
                  <span>Sub Bagian Umum dan Keuangan</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-person-square" style="color: #e361ff;"></i>
                  <span>Sub Bagian Perencanaan dan Kepegawaian</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-info-circle" style="color: #47aeff;"></i>
                  <span>Bidang Pengelolaan Informasi dan Komunikasi Publik</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-collection" style="color: #ffa76e;"></i>
                  <span>Subkoordinator Pengelolaan Informasi dan Media Publik</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-headset" style="color: #11dbcf;"></i>
                  <span>Subkoordinator Pengelolaan Komunikasi Publik</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-pc-display" style="color: #ff5828;"></i>
                  <span>Bidang Pengelolaan Teknologi Informasi dan Komunikasi</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-diagram-3" style="color: #3a9b76;"></i>
                  <span>Subkoordinator Pengelolaan Infrastuktur dan Tata Kelola Pemerintahan Elektronik</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-bar-chart" style="color: #c67a0f;"></i>
                  <span>Subkoordinator Pengembangan Sumber Daya Teknologi Informasi dan Komunikasi</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-file-earmark-lock" style="color: #9b1a25;"></i>
                  <span>Bidang Pengelolaan Statistik dan Persandian</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-fingerprint" style="color: #4b637a;"></i>
                  <span>Seksi Pengelolaan Keamanan Informasi dan Persandian</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="bi bi-graph-up" style="color: #b5f127;"></i>
                  <span>Seksi Pengelolaan Data dan Statistik</span>
                </div>
              </div><!-- End Icon List Item-->

            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="{{ asset('frontend/assets/img/or.png')}}" alt="Image" class="img-fluid" style="height: 700px; width: 500px">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Struktur Organisasi <br>Dinas Kominfo Kota Madiun</h4>
              <p>Untuk melihat detail struktur organisasi, bisa dilihat di sini</p>
              <a href="/about" class="btn-get-started">Lihat Di sini!</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    {{-- <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/blog-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/blog-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritati</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/blog/blog-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
              <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  @endsection



