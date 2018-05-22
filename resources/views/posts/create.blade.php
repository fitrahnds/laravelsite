@extends('layouts.admin')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Input Title', 'autocomplete'=>'off'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Text Article')}}
			{{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Input Content Article'])}}
		</div>
		<div class="form-group">
			{{Form::label('Category')}}
			{{Form::select('category_id', $category, ['class'=>'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::file('cover_img')}}
		</div>
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
