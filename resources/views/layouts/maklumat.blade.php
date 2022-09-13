@extends('layouts.appnew')

@include('layouts.header')

@extends('layouts.konten')

@section('content')


  <!-- ======= Header ======= -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/layanan.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Maklumat Pelayanan</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Maklumat Pelayanan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Maklumat Pelayanan</h2>

        </div>
        <div>
            <img src="{{ asset('frontend/assets/img/maklumat.jpeg')}}" style="height: 1000px; width: 700px;margin-left: 200px" class="img-fluid" alt="">
          </div>

      </div>
    </section><!-- End Why Choose Us Section -->
    <br>
    <br>
    <br>
    <br>

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
