@extends('web.layouts.detail')

@section('content')
	<div class="header-ads">
		<img class="center-block" src="/storage/img/ad-2.jpg" alt=""> 
	</div>	
	<!-- SECTION -->
	<div class="section">
			<!-- ROW -->
			<div class="row">
				<!-- Main Column -->
				<div class="col-md-8">

					<!-- breadcrumb -->
					<ul class="article-breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">News</a></li>
						<li>{{$post->title}}</li>
					</ul>
					<!-- /breadcrumb -->
				
					<!-- ARTICLE POST -->
					<article class="article article-post">
						<div class="article-share">
							<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="facebook"><i class="fa fa-facebook"></i></a>
							<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" href="https://twitter.com/intent/tweet?text={{Request::url()}}" class="twitter"><i class="fa fa-twitter"></i></a>
							<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" href="https://plus.google.com/share?url={{Request::url()}}" class="google"><i class="fa fa-google-plus"></i></a>
						</div>
						<div class="article-main-img">
							<img src="/storage/cover_images/original/{{$post->cover_img}}" alt="{{$post->title}}">
						</div>
						<div class="article-body">
							<ul class="article-info">
								<li class="article-category"><a href="#">News</a></li>
							</ul>
							<h1 class="article-title">{{$post->title}}</h1>
							<ul class="article-meta">
								<li><i class="fa fa-clock-o"></i> {{date_format($post->created_at,"d M Y H:i")}}</li>
							</ul>
							<p>{!!$post->body!!}</p>
						</div>
					</article>
					<!-- /ARTICLE POST -->
					
					<!-- widget tags -->
					@if($post->tags)
					<div class="widget-tags">
						<ul>
							<?php 
								$tags = explode(",",$post->tags);
							?>
							@foreach($tags as $tag)
								<li><a href="#">{{$tag}}</a></li>
							@endforeach
						</ul>
					</div>
					@endif
					<!-- /widget tags -->
					
					<!-- article comments -->
					<div class="article-comments">
						<div class="section-title">
							<h2 class="title">Comments</h2>
						</div>
						<div class="fb-comments" data-width="100%" data-href="{{Request::url()}}" data-numposts="5" data-order-by="reverse_time"></div>
						<div id="fb-root"></div>
					</div>
					<!-- /article comments -->
				</div>
				<!-- /Main Column -->
				
				<!-- Aside Column -->
				<div class="col-md-4">					
					<!-- social widget -->
					<div class="widget social-widget">
						<div class="widget-title">
							<h2 class="title">Stay Connected</h2>
						</div>
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
							<li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
							<li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
						</ul>
					</div>
					<!-- /social widget -->
					
					<!-- subscribe widget -->
					<div class="widget subscribe-widget">
						<div class="widget-title">
							<h2 class="title">Subscribe to Newslatter</h2>
						</div>
						<form>
							<input class="input" type="email" placeholder="Enter Your Email">
							<button class="input-btn">Subscribe</button>
						</form>
					</div>
					<!-- /subscribe widget -->
					
					<!-- article widget -->
					<div class="widget">
						<div class="widget-title">
							<h2 class="title">Most Read</h2>
						</div>
						
						<!-- owl carousel 3 -->
						<div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-3.jpg" alt="">
									</a>
									<ul class="article-info">
										<li class="article-type"><i class="fa fa-file-text"></i></li>
									</ul>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-4.jpg" alt="">
									</a>
									<ul class="article-info">
										<li class="article-type"><i class="fa fa-file-text"></i></li>
									</ul>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 3 -->
						
						<!-- ARTICLE -->
						<article class="article widget-article">
							<div class="article-img">
								<a href="#">
									<img src="/storage/img/img-widget-1.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article widget-article">
							<div class="article-img">
								<a href="#">
									<img src="/storage/img/img-widget-2.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article widget-article">
							<div class="article-img">
								<a href="#">
									<img src="/storage/img/img-widget-3.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
							</div>
						</article>
						<!-- /ARTICLE -->
					</div>
					<!-- /article widget -->
					
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
				</div>
				<!-- /Aside Column -->
			</div>
			<!-- /ROW -->
	</div>
	<!-- /SECTION -->
	
	<!-- SECTION -->
	<div class="section">
			<!-- ROW -->
			<div class="row">
				<!-- Main Column -->
				<div class="col-md-12">
					<!-- section title -->
					<div class="section-title">
						<h2 class="title">Related Post</h2>
					</div>
					<!-- /section title -->
					
					<!-- row -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-3 col-sm-6">
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-1.jpg" alt="">
									</a>
									<ul class="article-info">
										<li class="article-type"><i class="fa fa-camera"></i></li>
									</ul>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-3 col-sm-6">
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-2.jpg" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /Column 2 -->
						
						<!-- Column 3 -->
						<div class="col-md-3 col-sm-6">
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-3.jpg" alt="">
									</a>
									<ul class="article-info">
										<li class="article-type"><i class="fa fa-file-text"></i></li>
									</ul>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /Column 3 -->
						
						<!-- Column 4 -->
						<div class="col-md-3 col-sm-6">
							<!-- ARTICLE -->
							<article class="article">
								<div class="article-img">
									<a href="#">
										<img src="/storage/img/img-md-4.jpg" alt="">
									</a>
									<ul class="article-info">
										<li class="article-type"><i class="fa fa-file-text"></i></li>
									</ul>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- Column 4 -->
					</div>
					<!-- /row -->
				</div>
				<!-- /Main Column -->
			</div>
			<!-- /ROW -->
	</div>
	<!-- /SECTION -->

	@if(!Auth::guest() && Auth::user()->id === $post->user_id)
		<hr>
		<a href="/article/{{$post->id}}/{{$post->url_slug}}/edit" class="btn btn-primary">Edit</a>
		{!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
		{!! Form::close() !!}
	@endif
@endsection