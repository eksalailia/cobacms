
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
        @foreach($semua as $tp)
			<a href="{{route('reader.show_news',$tp->id)}}">
				<div class="col-md-8">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<img style="width: 200px;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/'.$tp->foto)}}"><br>
					  	<p><h5 style="width: 200px; font-size: 12px; font-family: Lucida Console, Courier New, monospace; font-color:#072366;  text-align: justify;">{{substr($tp->judul,0,25)}}...</h5></p>
					  </div>
					</div>
				</div>
			</a>
			@endforeach

      </div>

    </div>
  </section><!-- End Recent Blog Posts Section -->
  @include('layouts.footer')

@endsection
