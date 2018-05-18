@extends('layouts.app')

@section('content')
	<h1>Post</h1>
	@if(isset($posts))
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img style="width:100%;height:200px" src="/storage/cover_images/{{$post->cover_img}}">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
						<p>{!!$post->body!!}</p>
						<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
					</div>
				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection
