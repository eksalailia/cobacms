@extends('layouts.appnew')


<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/layanan.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Standar Pelayanan</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>Standar Pelayanan</li>
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

              <h1 class="title" style="text-align: center">Standar Pelayanan Dinas Kominfo Kota Madiun </h1>

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
                                                <th>No.</th>
                                                <th>Jenis Layanan</th>
                                                <th>Komponen</th>
                                                <th>Uraian Layanan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($pelayanan as $data)
                                            <tr>
                                                <td>{{$data->id}}.</td>
                                                <td>{{ $data->jenis }}</td>
                                                <td>{!! $data->komponen !!}</td>
                                                <td>{!! $data->uraian !!}</td>
                                                </tr>
                                                @endforeach
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
</div>
    </section><!-- End Blog Details Section -->

</main>

@include('layouts.footer')

@endsection
