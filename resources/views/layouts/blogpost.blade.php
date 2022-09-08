@extends('layouts.appnew')

<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/blog-header.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Kegiatan</h2>
      <ol>
        <li><a href="/blog">Beranda</a></li>
        <li>Kegiatan</li>
      </ol>

    </div>
  </div>
<section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kegiatan</h2>

      </div>

      <div class="row gy-5">
        @foreach($semua as $all)
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-box">
            <div class="post-img"><img src="{{asset('img_aktv/'.$all->img_aktv)}}" class="img-fluid" style="height:200px; width:400px;" alt=""></div>
            <div class="meta">
              <span class="post-date"> {{$all->tgl_aktivitas}} </span>
              <span class="post-author"> / {{$all->author}} </span>
            </div>
            <h3 class="post-title"> {{$all->judul}} </h3>
            <p> {!!substr($all->isi,0,100)!!}</p>
            <a href="{{route('layouts.blog_details',$all->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

     @endforeach


      </div>

    </div>
  </section><!-- End Recent Blog Posts Section -->
  @include('layouts.footer')

@endsection
