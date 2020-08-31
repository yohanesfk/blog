@extends('template_blog.content')

@section('isi')
<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/isi-post/samsung-galaxy-s20-ultra-tawarkan-kemampuan-zoom-luar-biasa"><img src="{{ asset('/frontend/img/hot-post-1.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="/list-category/gadget">Gadget</a>
							</div>
							<h3 class="post-title title-lg"><a href="/isi-post/samsung-galaxy-s20-ultra-tawarkan-kemampuan-zoom-luar-biasa">Samsung S20 Ultra Tawarkan Kemampuan Zoom Luarbiasa</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">JOSHUA</a></li>
								<li>29 JUNI 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/isi-post/daftar-film-dan-langganan-disney-plus-indonesia"><img src="{{ asset('/frontend/img/hot-post-2.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="/list-category/tips">Tips</a>
							</div>
							<h3 class="post-title"><a href="/isi-post/daftar-film-dan-langganan-disney-plus-indonesia">Daftar Film dan Langganan Disney Plus Indonesia</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">JOSHUA</a></li>
								<li>26 Agustus 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/isi-post/google-cloud-region-jakarta-resmi-beroperasi-di-indonesia"><img src="{{ asset('/frontend/img/hot-post-3.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="/list-category/Tips">Tips</a>
							</div>
							<h3 class="post-title"><a href="/isi-post/google-cloud-region-jakarta-resmi-beroperasi-di-indonesia">Google Cloud Region Jakarta Resmi Beroperasi di Indonesia</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">JOSHUA</a></li>
								<li>24 Juni 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>

		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach

					</div>
					<!-- /row -->


				</div>



			<!-- /row -->
@endsection




