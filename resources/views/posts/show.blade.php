@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<div>
		<img style="width:100%;" src="/storage/cover_images/{{$post->cover_img}}">
		<p>{!!$post->body!!}</p>
	</div>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	@if(!Auth::guest() && Auth::user()->id === $post->user_id)
		<hr>
		<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
		{!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
		{!! Form::close() !!}
	@endif
@endsection