<?php

Route::get('/', function() 
{
	return View::make('hello');
});

Route::get('/resume', function() 
{
	return View::make('resume');
});

Route::get('/', function() 
{
	return View::make('hello');
});

Route::get('/pong', 'PongController@index');
Route::post('/pong', 'PongController@addScore');

Route::get('/loading', function() 
{
	return View::make('loading');
});

// Blog Routing
Route::get('/blog', 'BlogController@blogMenu');
Route::get('/blog/{url}', 'BlogController@showPost');
Route::get('/blog/category/{url}', 'BlogController@categoryMenu');

// Rulebook Routing
Route::get('/rulebook', 'RulebookController@showRulebook');
Route::post('/rulebook', 'RulebookController@addRule');

// Admin Routing
Route::group(array('prefix' => 'admin'), function()
{
	Route::get('/', 'AdminController@showLogin');
	Route::post('/', 'AdminController@doLogin');

	Route::get('logout', 'AdminController@logout');

	Route::group(array('before' => 'auth'), function()
	{
		Route::get('dashboard', 'AdminController@showDashboard');

		Route::group(array('prefix' => 'posts'), function()
		{
			Route::get('/', 'AdminController@showPosts');
			Route::get('edit/{id}', 'AdminController@editPost');
			Route::post('edit/{id}', 'AdminController@updatePost');
			Route::get('new', 'AdminController@newPost');
			Route::post('new', 'AdminController@addNewPost');
		});

		Route::group(array('prefix' => 'pages'), function()
		{
			Route::get('/', 'AdminController@showPages');
			Route::get('edit/{id}', 'AdminController@editPage');
			Route::post('edit/{id}', 'AdminController@updatePage');
			Route::get('new', 'AdminController@newPage');
			Route::post('new', 'AdminController@addNewPage');
		});
	});
});

Route::get('/rss', 'RssController@generate');

// Page Routing
// comes last cause if its not found, 404 partay!
Route::get('/{url}', 'HomeController@showPage');