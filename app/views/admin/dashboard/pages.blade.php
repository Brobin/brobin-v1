@extends('admin.dashboard')

@section('title')

<title>Brobin Admin</title>

@stop

@section('header')

Pages Dashboard

@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
        <a href="pages/new"><button type="button" class="btn btn-primary">New Page</button></a>
    </div>
</div>

<br>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Pages</b>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>View</th>
                                <th>ID</th>
                                <th>URL</th>
                                <th>Title</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($pages as $page)
                            <tr>
                                <td><a href="/admin/pages/edit/{{ $page->id }}" ><i class="fa fa-fw fa-edit"></i></a></td>
                                <td><a href="//brobin.me/{{ $page->url}}" target="_blank"><img src="https://cdn4.iconfinder.com/data/icons/eldorado-medicine/40/eye_6-512.png" height="20px" /></a></td>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->url }}</td>
                                <td>{{ $page->title }}</td>
                                <td>[ {{ strlen($page->content) }} ]</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    {{-- $pages->links() --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@stop