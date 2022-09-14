@extends('layouts.appnew')


<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

  {{-- <main id="main"> --}}

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset ('frontend/assets/img/blog-header.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Petugas PPID</h2>
        <ol>
          <li><a href="/home">Beranda</a></li>
          <li>Petugas PPID</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-20" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                {{-- <img src="{{asset('img_aktv/'.$news->img_aktv)}}" alt="" class="img-fluid"> --}}
              </div>

              <h1 class="title" style="text-align: center">Petugas PPID dan Pengaduan</h1>

              <div class="meta-top">
                {{-- <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$news->author}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$news->tgl_aktivitas}}</time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul> --}}
              </div><!-- End meta top -->

              <div class="content">
                <div class="position-relative mt-auto">
                    <table id="bootstrap-all-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Uraian Jabatan</th>
                                                <th>Pendidikan</th>
                                                <th>Pelatihan yang diikuti</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {{-- @foreach ($semua as $data)
                                            <tr>

                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->nip }}</td>
                                                <td>{{ $data->jabatan }}</td>
                                                <td>{!! $data->keterangan !!}</td>
                                                </tr>
                                                @endforeach  --}}
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
              </div><!-- End post content -->

            </article><!-- End blog post -->

              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">

          </div>
{{--
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400" >
            <div class="sidebar ps-lg-4">
              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form class="form-inline" style="margin-top: 10px" action="{{route('layouts.cr_berita')}}" method="post">
    		 	        {{csrf_field()}}
                   <input  name="cari" type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
              <br></br>

              <div class="col-md-8">
		<div class=""><b>KEGIATAN LAINNYA</b></div>
		<hr>
		@foreach($semua as $ls)
		<a href="{{route('layouts.blog_details',$ls->id)}}" style="text-decoration: none; color: black">
      <div class="post-img">
       <img src="{{asset('img_aktv/'.$ls->img_aktv)}}" alt="" class="img-fluid" style="width:200px; height:200px;">
      </div>
			<p><b>{{$ls->judul}}</b></p>
			<p>{!! substr($ls->isi,0,100) !!}...</p>
			<br>
		</a>
		@endforeach
	</div> --}}
</div>
    </section><!-- End Blog Details Section -->

  {{-- </main><!-- End #main --> --}}
    @include('layouts.footer')
  <!-- ======= Footer ======= -->

  <!-- End Footer -->


@endsection
