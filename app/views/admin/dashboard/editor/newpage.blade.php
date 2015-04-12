@extends('admin.dashboard.editor')


@section('editor-title')

<title>New Page | Brobin Admin</title>

@stop


@section('editor-header')

New Page:

@stop


@section('editor-form')

{{ Form::open(array('url' => 'admin/pages/new', 'role' => 'form')) }}

	<div class="row">
		<div class="col-md-4">
    		<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('url', 'URL') }}
				{{ Form::text('url', null, array('class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{{ Form::textarea('content', null, array('id' => 'summernote', 'class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
	</div>

{{ Form::close() }}

@stop