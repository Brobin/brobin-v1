<?php $categories = Category::all(); ?>
<h3>Categories</h3>
<ul class="list-group">

@foreach($categories as $cat)
    <a href="/blog/category/{{ $cat->url }}">
    	<li class="list-group-item">
      		<span class="badge">{{ Post::where('category_id', '=', $cat->id)->count() }}</span>
      		{{ $cat->name }}
    	</li>
    </a>
@endforeach

</ul>