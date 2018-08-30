<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use Illuminate\Support\Facades\Auth;  

class ContestController extends Controller
{
    
	public function __construct() {
		$this->middleware('auth');
	}

	public function questions () {

		$questions = Question::all();

		if (Auth::user()->taken == 1)
			return redirect()->back()->with('error', 'You have already taken the quiz');

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

		$user = User::findOrFail(Auth::user()->id);
		$user->correct = $correct;
		$user->wrong = $wrong;
		$user->score = $score;
		$user->taken = 1;
		$user->save();

		$context = [
			'correct' => $correct,
			'wrong' => $wrong,
			'score' => $score
		];

		return redirect()->route('contest.results')->with('success', 'You successfully completed the quiz');

	}

	public function results() {

		return view('quiz.score');

	}

}
