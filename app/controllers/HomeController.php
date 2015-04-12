<?php

class HomeController extends BaseController {

	public function showHome() 
	{
		return $this->showPage('home');
	}

	public function showPage($url)
	{
		try {
			$page = Page::whereUrl($url)->firstOrFail();
		} catch (Exception $e) {
			$page = Page::whereUrl('404')->first();
		}
		return View::make('base.home')->with(array('page' => $page));
	}

}
