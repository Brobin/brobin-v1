<?php

class PongController extends BaseController
{

	public function index()
	{
		$scores = PingPong::all();
		$jake = [
			'sets'					=> 0,
			'winning_score_total' 	=> 0,
			'losing_score_total'	=> 0,
			'margin'				=> 0,
			'high_score'			=> 0,
			'low_score'				=> 21
		];
		$tobin = [
			'sets'					=> 0,
			'winning_score_total' 	=> 0,
			'losing_score_total'	=> 0,
			'margin'				=> 0,
			'high_score'			=> 0,
			'low_score'				=> 21
		];
		foreach($scores as $score)
		{
			if($score->jake > $score->tobin)
			{
				$jake['sets']++;
				$jake['winning_score_total'] += $score->jake;
				$tobin['losing_score_total'] += $score->tobin;
			}
			else
			{
				$tobin['sets']++;
				$tobin['winning_score_total'] += $score->tobin;
				$jake['losing_score_total'] += $score->jake;
			}
			if($score->tobin > $tobin['high_score']) $tobin['high_score'] = $score->tobin;
			if($score->tobin < $tobin['low_score']) $tobin['low_score'] = $score->tobin;
			if($score->jake > $jake['high_score']) $jake['high_score'] = $score->jake;
			if($score->jake < $jake['low_score']) $jake['low_score'] = $score->jake;
		}
		$jake['margin'] = $this->margin($jake['winning_score_total'], $jake['sets'], $tobin['losing_score_total']);

		$tobin['margin'] = $this->margin($tobin['winning_score_total'], $tobin['sets'], $jake['losing_score_total']);

		$scores = PingPong::orderBy('created_at', 'desc')->paginate(10);
		return View::make('pong')->with(array('scores' => $scores, 'jake' => $jake, 'tobin' => $tobin));
	}

	private function margin($win_score, $won_sets, $lose_score)
	{
		return round((($win_score - $lose_score) / $won_sets), 2);
	}

	public function addScore()
	{
		if(Input::get('password') == 'tj')
		{
			$rules = [
				'tobin'	=> 'required|integer',
				'jake'	=> 'required|integer'
			];
			$validator = Validator::make(Input::all(), $rules);
			if($validator->passes())
			{
				$score = new PingPong;
				$score->tobin = Input::get('tobin');
				$score->jake = Input::get('jake');
				$score->save();
			}
		}
		return Redirect::to('/pong');
	}

}