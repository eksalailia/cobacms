@extends('layouts.appnew')


<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

  {{-- <main id="main"> --}}

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/blog-header.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Prosedur Penyelesaian Sengketa</h2>
        <ol>
          <li><a href="/home">Beranda</a></li>
          <li>Prosedur Penyelesaian Sengketa</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-20" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">
                @foreach ($penyelesaian as $penyelesaian)
                <h1 class="title" style="text-align: center">{{$penyelesaian->judul}}</h1>

              <br><br><br><br>

                  <div class="post-img">
                    <img src="{{asset('img/'.$penyelesaian->img)}}" alt="" class="img-fluid" style="align:center; margin-left:150px;">
                  </div>

                  <div class="content">
                    <p>
                    {!! $penyelesaian->uraian !!}
                    </p>
                  </div><!-- End post content -->
              @endforeach
              </div><!-- End post content -->

            </article><!-- End blog post -->
          </div>
        </div>
      </section><!-- End Blog Details Section -->
    </section><!-- End Blog Details Section -->

  {{-- </main><!-- End #main --> --}}
    @include('layouts.footer')
  <!-- ======= Footer ======= -->

  <!-- End Footer -->


@endsection
