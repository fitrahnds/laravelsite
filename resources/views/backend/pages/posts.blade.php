@extends('backend.layouts.admin') 

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Article Posts</h4></div>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <a href="/posts/create" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Create Post</a>
                @if(count($posts)>0)
                <div style="overflow-x:auto;">
                <table class="table table-striped">
                    <thead>
                        <th>Tumbnail</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                <img src="{{URL::to('/storage/cover_images/200x100/'.$post->cover_img)}}">
                            </td>
                            <td>
                                <p><strong>{{$post->category->name}}</strong>&nbsp;<span style="color:#2592ff">{{date_format($post->created_at, 'd M Y')}}</span></p>
                                <a style="color:#5C5C5C" href="/posts/{{$post->id}}/edit"><h4>{{$post->title}}</h4></a>
                                <p>{{$post->short_description}}</p>
                            </td>
                            <td>
                                <div class="btn-group" style="display:inline-flex" role="group">
                                    <a href="/article/{{$post->id}}/" target="_blank" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="/posts/{{$post->id}}/delete" onClick="return confirm('Are you sure you want to delete article {{$post->title}} ?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                @else
                <p>You have no posts</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection