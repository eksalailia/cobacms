@extends('layouts.appnew')


<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

  {{-- <main id="main"> --}}

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Kegiatan</h2>
        <ol>
          <li><a href="/home">Beranda</a></li>
          <li>Kegiatan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{asset('img_aktv/'.$news->img_aktv)}}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$news->judul}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$news->author}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$news->tgl_aktivitas}}</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                 {{$news->isi}}
                </p>
              </div><!-- End post content -->

            </article><!-- End blog post -->

              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400" >
            <div class="sidebar ps-lg-4">
              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="{{route('layouts.blogpost')}}" style="margin-top: 20px" method="GET" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
    </section><!-- End Blog Details Section -->

  {{-- </main><!-- End #main --> --}}
    @include('layouts.footer')
  <!-- ======= Footer ======= -->

  <!-- End Footer -->


@endsection
