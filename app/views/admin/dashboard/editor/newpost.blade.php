@extends('admin.dashboard.editor')


@section('editor-title')

<title>New Post | Brobin Admin</title>

@stop


@section('editor-header')

New Post:

@stop


@section('editor-form')

{{ Form::open(array('url' => 'admin/posts/new', 'role' => 'form')) }}

	<div class="row">
		<div class="col-md-4">
    		<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', '',array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('url', 'URL') }}
				{{ Form::text('url', '', array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('category', 'Category') }}
				{{ Form::select('category', $categories, 0, array('class' => 'form-control')); }}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{{ Form::textarea('content', '', array('id' => 'summernote', 'class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
	</div>

{{ Form::close() }}

@stop