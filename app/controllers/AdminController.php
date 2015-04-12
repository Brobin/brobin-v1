<?php

class AdminController extends BaseController {


	public function showLogin()
	{
		if(Auth::check()) {
			return Redirect::to('/admin/dashboard');
		}
		return View::make('admin.login');
	}

	public function doLogin()
	{
		$rules = array(
			'username'    => 'required',
			'password' => 'required|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('admin')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);
			if (Auth::attempt($userdata)) {
				return Redirect::to('admin/dashboard');
			} else {	 	
				return Redirect::to('admin');
			}
		}
	}

	public function logout()
	{
		Auth::logout();
		$message = 'You successfully logged out!';
		return View::make('admin.login')->with( array('message' => $message));
	}

	public function showDashboard()
	{
		return View::make('admin.dashboard.home')->with($this->getObjects());
	}

	private function getObjects()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(10);
		$categories = Category::all();
		$pages = Page::orderBy('id', 'asc')->get();
		$users = User::all();
		return array('posts' => $posts,
			'categories' => $categories,
			'pages' => $pages,
			'users' => $users);
	}

	private function selectCategories()
	{
		$categories = Category::all();
		$selectCategories = array();
		foreach($categories as $category) {
		    $selectCategories[$category->id] = $category->name;
		}
		return $selectCategories;
	}

	private function selectUsers()
	{
		$users = User::all();
		$selectUsers = array();
		foreach($users as $user) {
			$selectUsers[$user->id] = $user->name;
		}
		return $selectUsers;
	}


	public function showPosts()
	{
		return View::make('admin.dashboard.posts')->with($this->getObjects());
	}

	public function editPost($id)
	{
		$post = Post::find($id);		
		return View::make('admin.dashboard.editor.editpost')->with(array(
			'post' => $post,
			'users' => $this->selectUsers(),
			'categories' => $this->selectCategories()));
	}

	public function newPost()
	{
		return View::make('admin.dashboard.editor.newpost')->with( array(
			'users' => $this->selectUsers(),
			'categories' => $this->selectCategories()));
	}

	public function showPages()
	{
		return View::make('admin.dashboard.pages')->with($this->getObjects());
	}

	public function editPage($id)
	{
		$page = Page::find($id);
		return View::make('admin.dashboard.editor.editpage')->with(array('page' => $page));
	}

	public function newPage() 
	{
		return View::make('admin.dashboard.editor.newpage')->with($this->getObjects());	
	}

	public function updatePost($id)
	{
		$validator = $this->validatePostOrPage(Input::all());

		if ($validator->passes()) {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->url = Input::get('url');
			$post->content = Input::get('content');
			$post->category_id = Input::get('category');
			$post->save();
			return Redirect::to('/admin/posts');
		}
		return Redirect::to('admin/posts/edit'.$id)
				->withErrors($validator)
				->withInput(Input::all());
	}

	public function addNewPost()
	{
		$validator = $this->validatePostOrPage(Input::all());

		if ($validator->passes()) {
			$post = new Post();
			$post->title = Input::get('title');
			$post->url = Input::get('url');
			$post->content = Input::get('content');
			$post->category_id = Input::get('category');
			$post->user_id = Auth::user()->id;
			$post->save();
			return Redirect::to('/admin/posts');
		}
		return Redirect::to('admin/posts/new')
				->withErrors($validator)
				->withInput(Input::all());
	}

	public function updatePage($id)
	{
		$validator = $this->validatePostOrPage(Input::all());

		if ($validator->passes()) {
			$page = Page::find($id);
			$page->title = Input::get('title');
			$page->url = Input::get('url');
			$page->content = Input::get('content');
			$page->save();
			return Redirect::to('/admin/pages');
		}
		return Redirect::to('admin/pages/new')
				->withErrors($validator)
				->withInput(Input::all());
	
	}

	public function addNewPage()
	{
		$validator = $this->validatePostOrPage(Input::all());

		if ($validator->passes()) {
			$page = new Page();
			$page->title = Input::get('title');
			$page->url = Input::get('url');
			$page->content = Input::get('content');
			$page->save();
			return Redirect::to('/admin/pages');
		}
		return Redirect::to('admin/pages/new')
				->withErrors($validator)
				->withInput(Input::all());
	}

	private function validatePostOrPage($input)
	{
		$rules = array(
			'title'    => 'required',
			'url'      => 'required',
			'content'  => 'required|min:100',
		);
		
		$validator = Validator::make($input, $rules);
		return $validator;
	}


}