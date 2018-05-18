@extends('layouts.admin')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Input Title', 'autocomplete'=>'off'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Text Article')}}
			{{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Input Content Article'])}}
		</div>
		<div class="form-group">
			{{Form::file('cover_img')}}
		</div>
        {{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
