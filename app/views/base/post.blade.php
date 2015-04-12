@extends('base.brobin')

@section('title')

<title>{{ $post->title }} | Tobin Brown</title>

@stop

@section('content')

<h2>{{ $post->title }}</h2>

{{ $post->content }}

@stop