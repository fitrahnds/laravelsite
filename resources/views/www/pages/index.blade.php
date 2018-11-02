@extends('www.layouts.index')

@section('content')	
	<div class="header-ads">
		<img class="center-block" src="/storage/img/ad-2.jpg" alt=""> 
	</div>	
		@if(count($posts)>0)
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			@foreach($posts as $post)
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
				<img style="height:375px" src="{{URL::to('/storage/cover_images/original/'.$post->cover_img)}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">{{$post->category->name}}</a></li>
					</ul>
					<h2 class="article-title"><a href="{{URL::to('/article/'.$post->id.'/'.$post->url_slug)}}">{{$post->title}}</a></h2>
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
		<!-- SECTION -->
		<div class="section">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Rekomendasi</h2>
						</div>
						<!-- /section title -->

						@if(count($posts) > 0)
						@foreach($posts as $post)
							<!-- ARTICLE -->
							<article class="article row-article">
								<div class="article-img">
									<a href="#">
										<img style="width:200px;height:100px" src="{{URL::to('/storage/cover_images/200x100/'.$post->cover_img)}}" alt="{{$post->title}}">
									</a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">{{$post->category->name}}</a></li>&nbsp;
										<li class="article-meta"><i class="fa fa-clock-o"></i> {{getTimeDuration(date_format($post->created_at,"d M Y H:i:s"))}}</li>
									</ul>
									<h3 class="article-title"><a href="{{URL::to('/article/'.$post->id.'/'.$post->url_slug)}}">{{$post->title}}</a></h3>
									<div class="article-shortdesc">
										@if (strlen($post->short_description) > 125)
											<span>{!!substr($post->short_description, 0, 125)!!}</span>
										@else
											{!!$post->short_description!!}
										@endif
									</div>
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
								@if(count($posts) > 0)
								@foreach($posts as $post)
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="{{URL::to('/storage/cover_images/300x250/'.$post->cover_img)}}" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">{{$post->category->name}}</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="{{URL::to('/article/'.$post->id.'/'.$post->url_slug)}}">{{$post->title}}</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> {{date_format($post->created_at,"d M Y H:i")}}</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								@endforeach
								@endif
							</div>
							<!-- /owl carousel 4 -->
						</div>
						<!-- /article widget -->
						
						<!-- tranding tag widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Topik Populer</h2>
							</div>
							<ul>
								<li class = "tag-popular">
									<span class="tag-hastag">#</span> 
									<a class="tag-link" href="#">
										<span class="tag-text">CPNS</span>
									</a>
								</li>
								<li class = "tag-popular">
									<span class="tag-hastag">#</span> 
									<a class="tag-link" href="#">
										<span class="tag-text">RATNA SAROMPAET</span>
									</a>
								</li>
								<li class = "tag-popular">
									<span class="tag-hastag">#</span> 
									<a class="tag-link" href="#">
										<span class="tag-text">PILPRES</span>
									</a>
								</li>
								<li class = "tag-popular">
									<span class="tag-hastag">#</span> 
									<a class="tag-link" href="#">
										<span class="tag-text">2019GANTIPRESIDEN</span>
									</a>
								</li>
								<li class = "tag-popular">
									<span class="tag-hastag">#</span> 
									<a class="tag-link" href="#">
										<span class="tag-text">UNINSTALL GOJEK</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- /trending-tag widget -->
						
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
		<!-- /SECTION -->
@endsection
