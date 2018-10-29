@extends('www.layouts.index')

@section('content')
	<h1>{{$title}}</h1>
	@if(isset($services))
		<ul class="list-group">
		@foreach($services as $list)
			<li class="list-group-item">{{$list}}</li>
		@endforeach
		</ul>
	@endif
@endsection
