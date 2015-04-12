@extends('base.brobin')

@section('title')

<title>{{ $title }} | Tobin Brown</title>

@stop

@section('content')

<h2>{{ $title }}</h2>

@foreach($posts as $post)
<div class="list-group">
  <a href="/blog/{{ $post->url }}" class="list-group-item">
    <h4 class="list-group-item-heading">{{ $post->title }}</h4>
    <p class="list-group-item-text">{{ substr(strip_tags($post->content), 0, 200) }}...</p>
  </a>
</div>
@endforeach

<center>
	{{ $posts->links() }}
</center>

@stop