<?php

class ErrorController extends BaseController {

	public function get404error($exception)
	{
		return View::make('base.error.404');
	}

}