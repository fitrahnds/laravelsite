@extends('backend.layouts.admin')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Input Title', 'autocomplete'=>'off', 'maxlength'=>'75', 'oninput'=>'document.getElementById("url").value = convertToSlug(document.getElementById("title").value);'])}}
		</div>
		<div class="form-group">
			{{Form::label('url', 'URL Slug')}}
			{{Form::text('url', $post->url_slug, ['class'=>'form-control', 'placeholder'=>'URL Slug', 'autocomplete'=>'off', 'readonly'=>'true'])}}
		</div>
		<div class="form-group">
			{{Form::label('short_desc', 'Short Description')}}
			{{Form::text('short_desc', $post->short_description, ['class'=>'form-control', 'placeholder'=>'Short Description', 'autocomplete'=>'off', 'maxlength'=>'120'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Text Article')}}
			{{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Input Content Article'])}}
		</div>
		<div class="form-group">
			{{Form::label('tags', 'Tags')}}
			{{Form::text('tags', $post->tags, ['class'=>'form-control', 'placeholder'=>'Add Tags','data-role'=>'tagsinput'])}}
		</div>
		<div class="form-group">
			{{Form::label('Category')}}
			{{Form::select('category_id', $category, ['class'=>'form-control'])}}
		</div>
		<div class="form-group">
			{{Form::file('cover_img')}}
		</div>
        {{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
