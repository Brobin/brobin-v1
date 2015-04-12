<?php

class RulebookController extends BaseController {

	public function showRulebook()
	{
		$rules = Rule::all();
		return View::make('base.rulebook')->with(array('rules' => $rules));
	}

	public function addRule()
	{
		$rule = Input::get('rule');
		$password = Input::get('password');

		$password_hash = '$2y$10$P50sDxoqVka/ce4DvVwwDutOg98ohNeMHYd3LPqp2BCov732zTlSi';

		$same_rule = Rule::where('rule', '=', $rule);

		if( $same_rule == null && Hash::check($password, $password_hash)) {
			DB::table('rulebook')->insert(array('rule' => $rule));
			$message = 'Rule "'.$rule.'" was added!';
		} else {
			$message = 'Something went wrong :\'(';
		}
		$rules = Rule::all();
		return View::make('base.rulebook')->with(array('rules' => $rules, 'message' => $message));
		
	}

}