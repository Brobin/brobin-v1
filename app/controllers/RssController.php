<?php

class RssController extends BaseController {
	
	public function generate() {
		$posts = Post::orderBy('id', 'desc')->get();
		$contents = View::make('rss')->with(array(
			'posts' => $posts));
		$response = Response::make($contents, 200);
		$response->header('Content-Type', 'application/xml');
		return $response;
	}

}