@extends('admin.dashboard')

@section('title')

@yield('editor-title')

{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}
{{ HTML::style('//oss.maxcdn.com/summernote/0.5.1/summernote.css') }}
{{ HTML:: script('//oss.maxcdn.com/summernote/0.5.1/summernote.min.js') }}
<script> $(document).ready(function() { $('#summernote').summernote(); });</script>

@stop


@section('header')

@yield('editor-header')

@stop


@section('content')

<div class="row">
    <div class="col-lg-12">

    	@include('admin.dashboard.editor.errors')

    	@yield('editor-form')

	</div>
</div>

@stop