
@extends('layouts.appnew')


<!-- ======= Header ======= -->
@include('layouts.header')

@extends('layouts.konten')

@section('content')


<section id="recent-posts" class="recent-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kegiatan</h2>

      </div>

      <div class="row gy-5">
	  @foreach ($news as $e)
					<div class="row" style="margin-left:10px;">
						<a href="/" style="color:black">
							<div class="col-md-3">
								<img style="width: 300px;height: 200px;margin: 15px" class="img-rounded img-responsive" src="{{asset('img_aktv/'.$e->img_aktv)}}">
							</div>
							<div class="col-md-6" style="margin: 15px;">
                                <h3>{{$e->judul}}</a></h3>
                                <p class="normal">{{substr($e->isi,0,100)}}...</p>
								<a href="{{route('layouts.blog_details',$e->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
							</div>
						</a>
					</div>
				@endforeach

      </div>

    </div>
  </section><!-- End Recent Blog Posts Section -->
  @include('layouts.footer')

@endsection
