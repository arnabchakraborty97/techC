@extends('layouts.app')

@section('title')
	Contest
@endsection

@section('content')
	
	@if (count($questions) > 0)


		{{ Form::open(['action' => 'ContestController@check', 'method' => 'POST']) }}
			@foreach($questions as $question)

			
				<div class="card">
					<div class="card-header">
						{{ Form::hidden('question[]', $question->id, ['class' => 'form-control-plaintext']) }}
						{{ $question->question }}
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								{{ Form::radio('choice['.($question->id - 1).']', $question->choice1) }} {{ $question->choice1 }}
							</div>
							<div class="col-md-6">
								{{ Form::radio('choice['.($question->id - 1).']', $question->choice2) }} {{ $question->choice2 }}
							</div>
							<div class="col-md-6">
								{{ Form::radio('choice['.($question->id - 1).']', $question->choice3) }} {{ $question->choice3 }}
							</div>
							<div class="col-md-6">
								{{ Form::radio('choice['.($question->id - 1).']', $question->choice4) }} {{ $question->choice4 }}
							</div>
						</div>
					</div>
				</div>

			@endforeach
			<br>

			<div class="text-center"> 
				{{ Form::submit('Submit', ['class' => 'btn btn-success btn-md']) }}
			</div>

		{{ Form::close() }}

	@else
		Nothing to show
	@endif

@endsection