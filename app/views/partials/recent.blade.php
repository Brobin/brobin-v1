<h3>Recent Posts</h3>
<div class="list-group">

<?php $posts = Post::orderBy('id', 'desc')->limit(3)->get(); ?>

@foreach($posts as $post)
	<a href="/blog/{{ $post->url }}" class="list-group-item">
        <h4 class="list-group-item-heading">{{ $post->title }}</h4>
        <p class="list-group-item-text">{{ substr(strip_tags($post->content), 0, 80) }}...</p>
  	</a>
@endforeach

</div>