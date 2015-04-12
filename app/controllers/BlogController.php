<?php

class BlogController extends BaseController {

	/*
	 * Creates a view that shows a single post
	 */
	public function showPost($url) 
	{
		$post = Post::where('url', '=', $url)->firstOrFail();
		return View::make('base.post')->with(array('post' => $post));
	}

	/*
	 * Creates a view the shows the blog menu
	 */
	public function blogMenu()
	{
		$posts = Post::orderBy('id', 'DESC')->paginate(8);
		return View::make('base.blog')->with(array('posts' => $posts, 'title' => 'Brobin\'s Blog'));
	}

	/*
	 * Creates a view that shows a blog category menu
	 */
	public function categoryMenu($url)
	{
		$category = Category::where('url', '=', $url)->firstOrFail();
		$posts = Post::where('category_id', '=', $category->id)->orderBy('id', 'desc')->paginate(8);
		return View::make('base.blog')->with(array('posts' => $posts, 'title' => $category->name));
	}

}
