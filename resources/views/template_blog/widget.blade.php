		<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="/frontend/img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->


					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="/isi-post/microsoft-office-2019-pro-plus-v2009-build-1321920004-agustus-2020"><img src="/frontend/img/widget-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="/list-category/office">Office</a>
								</div>
								<h3 class="post-title"><a href="/isi-post/microsoft-office-2019-pro-plus-v2009-build-1321920004-agustus-2020">Microsoft Office 2019 Pro Plus v2009 Build 13219.20004 Agustus 2020</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="/isi-post/adobe-photoshop-2021-v22001012-pre-activated-full-version"><img src="/frontend/img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="/list-category/design">Design</a>
								</div>
								<h3 class="post-title"><a href="/isi-post/adobe-photoshop-2021-v22001012-pre-activated-full-version">Adobe Photoshop 2021 v22.0.0.1012 Pre-Activated Full Version</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="/isi-post/wondershare-filmora-9529-full-version"><img src="/frontend/img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="/list-category/design">Design</a>
								</div>
								<h3 class="post-title"><a href="/isi-post/wondershare-filmora-9529-full-version">Wondershare Filmora 9.5.2.9 Full Version</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="/isi-post/windows-10-pre-activated-200410019041450-aug-2020"><img src="/frontend/img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="/list-category/windows">Windows</a>
								</div>
								<h3 class="post-title"><a href="/isi-post/windows-10-pre-activated-200410019041450-aug-2020">Windows 10 Pre-Activated 2004.10.0.19041.450 Aug 2020</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>
