@extends('backend.layouts.admin')

@section('content')
	<div class="row">
		{!! Form::open(['action' => ['Backend\PostsController@update', $post->id], 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="col-md-9">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Post</h3>
				</div>
				<div class="box-body">
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
						{{Form::hidden('_method', 'PUT')}}
						{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label>Tumbnail</label>
						@if($post->cover_img)
							<img style="margin-bottom:10px" src="/storage/cover_images/200x100/{{$post->cover_img}}">
						@endif
						{{Form::file('cover_img')}}
					</div>
					<div class="form-group">
						{{Form::label('Category')}}
						{{Form::select('category_id', $category, ['class'=>'form-control'])}}
					</div>
					<div class="form-group">
						{{Form::label('tags', 'Tags')}}
						{{Form::text('tags', $post->tags, ['class'=>'form-control', 'placeholder'=>'Add Tags','data-role'=>'tagsinput'])}}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
@endsection
