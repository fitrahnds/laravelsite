@extends('backend.layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Create Post</h3>
			</div>
			<div class="box-body">
				{!! Form::open(['action' => 'Backend\PostsController@store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
					<div class="form-group">
						{{Form::label('title', 'Title')}}
						{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Input Title', 'autocomplete'=>'off', 'maxlength'=>'75', 'oninput'=>'document.getElementById("url").value = convertToSlug(document.getElementById("title").value);'])}}
					</div>
					<div class="form-group">
						{{Form::label('url', 'URL Slug')}}
						{{Form::text('url', '', ['class'=>'form-control', 'placeholder'=>'URL Slug', 'autocomplete'=>'off', 'readonly'=>'true'])}}
					</div>
					<div class="form-group">
						{{Form::label('short_desc', 'Short Description')}}
						{{Form::text('short_desc', '', ['class'=>'form-control', 'placeholder'=>'Short Description', 'autocomplete'=>'off', 'maxlength'=>'120'])}}
					</div>
					<div class="form-group">
						{{Form::label('body', 'Text Article')}}
						{{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Input Content Article'])}}
					</div>
					<div class="form-group">
						{{Form::label('tags', 'Tags')}}
						{{Form::text('tags', '', ['class'=>'form-control', 'placeholder'=>'Add Tags','data-role'=>'tagsinput'])}}
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
			</div>
		</div>
	</div>
</div>
@endsection
