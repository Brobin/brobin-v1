@extends('admin.dashboard.editor')


@section('editor-title')

<title>Edit Page | Brobin Admin</title>

@stop


@section('editor-header')

Edit Page:

@stop


@section('editor-form')

{{ Form::open(array('url' => 'admin/pages/edit/'.$page->id, 'role' => 'form')) }}

	<div class="row">
		<div class="col-md-4">
    		<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', $page->title, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('url', 'URL') }}
				{{ Form::text('url', $page->url, array('class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{{ Form::textarea('content', $page->content, array('id' => 'summernote', 'class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::submit('Update Page', array('class' => 'btn btn-default')) }}
	</div>

{{ Form::close() }}

@stop