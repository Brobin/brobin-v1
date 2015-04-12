@extends('admin.dashboard')

@section('title')

<title>Brobin Admin</title>

@stop

@section('header')

Blog Post Dashboard

@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
        <a href="posts/new"><button type="button" class="btn btn-primary">New Post</button></a>
    </div>
</div>

<br>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Posts</b>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>View</th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($posts as $post)
                            <tr>
                                <td><a href="/admin/posts/edit/{{ $post->id }}" ><i class="fa fa-fw fa-edit"></i></a></td>
                                <td><a href="//brobin.me/blog/{{ $post->url}}" target="_blank"><img src="https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/eye_6-512.png" height="20px" /></a></td>
                                <td>{{ date("M d, Y",strtotime($post->created_at)) }}
                                <td>{{ $post->title }}</td>
                                <td>{{ $users->find($post->user_id)->name }}</td>
                                <td>{{ $categories->find($post->category_id)->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@stop