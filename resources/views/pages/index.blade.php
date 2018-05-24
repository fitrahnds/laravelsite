@extends('layouts.index')

@section('content')	
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Trending Posts</h2>
							<!-- tab nav -->
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#all">All</a></li>
								@foreach($category as $list)
									<li><a data-toggle="tab" href="#{{$list->slug}}">{{$list->name}}</a></li>
								@endforeach
							</ul>
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="all" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									@if(count($posts)>0)
										<?php $i=1; ?>
										@foreach($posts as $post)
											@if($i<=4)
												<div class="col-md-3 col-sm-6" style="height:325px">
													<!-- ARTICLE -->
													<article class="article">
														<div class="article-img">
															<a href="/posts/{{$post->id}}">
															<img style="height:200px" src="/storage/cover_images/{{$post->cover_img}}" alt="">
															</a>
														</div>
														<div class="article-body">
															<h4 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
															<ul class="article-meta">
																<li><i class="fa fa-clock-o"></i> {{$post->created_at}}</li>
															</ul>
														</div>
													</article>
													<!-- /ARTICLE -->
												</div>
											@else
												<div class="col-md-4 col-sm-6">
													<!-- ARTICLE -->
													<article class="article widget-article">
														<div class="article-img">
															<a href="/posts/{{$post->id}}">
																<img style="height:80px" src="/storage/cover_images/{{$post->cover_img}}" alt="">
															</a>
														</div>
														<div class="article-body">
															<h4 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
															<ul class="article-meta">
																<li><i class="fa fa-clock-o"></i> {{$post->created_at}} </li>
															</ul>
														</div>
													</article>
													<!-- /ARTICLE -->
												</div>
											@endif
											<?php $i+=1; ?>
										@endforeach
									@endif
								</div>
								<!-- /row -->
							</div>
							<!-- /tab1 -->
							<!-- tab2 -->
							@foreach($category as $list)
								<div id="{{$list->slug}}" class="tab-pane fade in">
									<!-- row -->
									<div class="row">
										@if(count($posts)>0)
											<?php $i=1; ?>
											@foreach($posts as $post)
												@if($post->category->slug===$list->slug)
													@if($i<=4)
														<div class="col-md-3 col-sm-6" style="height:325px">
															<!-- ARTICLE -->
															<article class="article">
																<div class="article-img">
																	<a href="/posts/{{$post->id}}">
																	<img style="height:200px" src="/storage/cover_images/{{$post->cover_img}}" alt="">
																	</a>
																</div>
																<div class="article-body">
																	<h4 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
																	<ul class="article-meta">
																		<li><i class="fa fa-clock-o"></i> {{$post->created_at}}</li>
																	</ul>
																</div>
															</article>
															<!-- /ARTICLE -->
														</div>
													@else
														<div class="col-md-4 col-sm-6">
															<!-- ARTICLE -->
															<article class="article widget-article">
																<div class="article-img">
																	<a href="/posts/{{$post->id}}">
																		<img style="height:80px" src="/storage/cover_images/{{$post->cover_img}}" alt="">
																	</a>
																</div>
																<div class="article-body">
																	<h4 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
																	<ul class="article-meta">
																		<li><i class="fa fa-clock-o"></i> {{$post->created_at}} </li>
																	</ul>
																</div>
															</article>
															<!-- /ARTICLE -->
														</div>
													@endif
													<?php $i+=1; ?>
												@endif
											@endforeach
										@endif
									</div>
									<!-- /row -->
								</div>
							@endforeach
							<!-- /tab2 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Rekomendasi</h2>
								</div>
								<!-- /section title -->
								@if(count($posts)>0)
									@foreach($posts as $post)
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="/posts/{{$post->id}}">
												<img src="/storage/cover_images/{{$post->cover_img}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i>{{$post->created_at}}</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									@endforeach
								@endif
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Headlines</h2>
								</div>
								<!-- /section title -->

								@if(count($posts)>0)
									@foreach($posts as $post)
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="/posts/{{$post->id}}">
													<img src="/storage/cover_images/{{$post->cover_img}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h3 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> {{$post->created_at}}</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									@endforeach
								@endif
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">News</h2>
								</div>
							</div>
							<!-- /section title -->
							
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="/storage/img/img-sm-3.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="/storage/img/img-sm-4.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="/storage/img/img-md-1.jpg" alt="">
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
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="/storage/img/img-md-2.jpg" alt="">
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
							<!-- /Column 2 -->
							
							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4">
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
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="/storage/img/ad-1.jpg" alt=""> 
						</div>
						<!-- /Ad widget -->
						
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
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="/storage/img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Popular Video</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
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
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="/storage/img/img-thumb-3.jpg" alt="">
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
									<img src="/storage/img/img-thumb-4.jpg" alt="">
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
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
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
										<img src="/storage/cover_images/{{$post->cover_img}}" alt="{{$post->title}}">
									</a>
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">{{$post->category->name}}</a></li>&nbsp;
										<li class="article-meta"><i class="fa fa-clock-o"></i> {{date_format($post->created_at,"d M Y H:i")}}</li>
									</ul>
									<h3 class="article-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
									<p>
										@if (strlen($post->body) > 150)
											<span>{!!substr($post->body, 0, 150)!!}</span>
										@else
											{!!$post->body!!}
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
