@extends('admin.dashboard.editor')


@section('editor-title')

<title>Edit Post | Brobin Admin</title>

@stop


@section('editor-header')

Edit Post:

@stop


@section('editor-form')

{{ Form::open(array('url' => 'admin/posts/edit/'.$post->id, 'role' => 'form')) }}

	<div class="row">
		<div class="col-md-4">
    		<div class="form-group">
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', $post->title, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('url', 'URL') }}
				{{ Form::text('url', $post->url, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				{{ Form::label('category', 'Category') }}
				{{ Form::select('category', $categories, $post->category_id, array('class' => 'form-control')); }}
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{{ Form::textarea('content', $post->content, array('id' => 'summernote', 'class' => 'form-control')) }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::submit('Update Post', array('class' => 'btn btn-default')) }}
	</div>

{{ Form::close() }}

@stop