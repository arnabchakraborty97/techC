<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class ContestController extends Controller
{
    
	public function __construct() {
		$this->middleware('auth');
	}

	public function questions () {

		$questions = Question::all();

		return view('quiz.contest')->with('questions', $questions);

	}

	public function check (Request $request) {
		$correct = 0;
		$wrong = 0;
		$score = 0;

		foreach($request->question as $key => $value) {

			$question = Question::find($value);

			if (isset($request->choice[$key])) {
				if (array_key_exists($key, $request->choice)) {
					if ($question->correct == $request->choice[$key]) {
						$correct += 1;
						$score += 3;
					} else {
						$wrong += 1;
						$score -= 1;
					}
				}
			}

		}

		$context = [
			'correct' => $correct,
			'wrong' => $wrong,
			'score' => $score
		];

		return view('quiz.score')->with($context);

	}

}
