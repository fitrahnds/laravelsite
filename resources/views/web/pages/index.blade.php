@extends('web.layouts.index')

@section('content')	
		@if(count($posts)>0)
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			@foreach($posts as $post)
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img style="height:450px" src="/storage/cover_images/original/{{$post->cover_img}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">{{$post->category->name}}</a></li>
					</ul>
					<h2 class="article-title"><a href="/article/{{$post->id}}/{{$post->url_slug}}">{{$post->title}}</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> {{$post->created_at}}</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->
			@endforeach
		</div>
		@endif
		<!-- /Owl Carousel 1 -->
		<div class="header-ads">
			<img class="center-block" src="/storage/img/ad-2.jpg" alt=""> 
		</div>		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- /section title -->

						@if(count($posts) > 0)
						@foreach($posts as $post)
							<!-- ARTICLE -->
							<article class="article row-article">
								<div class="article-img">
									<a href="#">
										<img style="width:250px;height:125px" src="/storage/cover_images/250x125/{{$post->cover_img}}" alt="{{$post->title}}">
									</a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">{{$post->category->name}}</a></li>&nbsp;
										<li class="article-meta"><i class="fa fa-clock-o"></i> {{date_format($post->created_at,"d M Y H:i")}}</li>
									</ul>
									<h3 class="article-title"><a href="/article/{{$post->id}}/{{$post->url_slug}}">{{$post->title}}</a></h3>
									<p>
										@if (strlen($post->short_description) > 125)
											<span>{!!substr($post->short_description, 0, 125)!!}</span>
										@else
											{!!$post->short_description!!}
										@endif
									</p>
								</div>
							</article>
							<!-- /ARTICLE -->
						@endforeach
						{{-- {{$posts->links()}} --}}
					@else
						<p>No posts found</p>
					@endif
					</div>
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Featured Posts</h2>
							</div>
							
							<!-- owl carousel 4 -->
							<div id="owl-carousel-4" class="owl-carousel owl-theme">
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="/storage/img/img-thumb-1.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="/storage/img/img-thumb-2.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 4 -->
						</div>
						<!-- /article widget -->
						
						<!-- galery widget -->
						<div class="widget galery-widget">
							<div class="widget-title">
								<h2 class="title">Flickr Photos</h2>
							</div>
							<ul>
								<li><a href="#"><img src="/storage/img/img-widget-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-6.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-7.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-8.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-9.jpg" alt=""></a></li>
								<li><a href="#"><img src="/storage/img/img-widget-10.jpg" alt=""></a></li>
							</ul>
						</div>
						<!-- /galery widget -->
						
						<!-- tweets widget -->
						<div class="widget tweets-widget">
							<div class="widget-title">
								<h2 class="title">Recent Tweets</h2>
							</div>
							<ul>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tweets widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
@endsection
