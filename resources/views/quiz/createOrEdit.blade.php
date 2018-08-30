@extends('layouts.app')

@section('title')
	{{ isset($question)?'Edit':'Create' }} Questions
@endsection

@section('content')
	
	<h1 class="text-center">{{ isset($question)?'Edit':'Create' }} Question</h1>

	{{ Form::open(['action' => isset($question)?['QuestionController@update', $question->id]:'QuestionController@store', 'method' => 'POST']) }}

		{{ Form::label('question', 'Question')}}
		{{ Form::text('question', isset($question)? $question->question: '', ['class' => 'form-control']) }}

		{{ Form::label('choice1', 'Choice 1')}}
		{{ Form::text('choice1', isset($question)? $question->choice1: '', ['class' => 'form-control']) }}

		{{ Form::label('choice2', 'Choice 2')}}
		{{ Form::text('choice2', isset($question)? $question->choice2: '', ['class' => 'form-control']) }}

		{{ Form::label('choice3', 'Choice 3')}}
		{{ Form::text('choice3', isset($question)? $question->choice3: '', ['class' => 'form-control']) }}

		{{ Form::label('choice4', 'Choice 4')}}
		{{ Form::text('choice4', isset($question)? $question->choice4: '', ['class' => 'form-control']) }}

		{{ Form::label('correct', 'Corrent Choice') }}
		{{ Form::text('correct', isset($question)? $question->correct: '', ['class' => 'form-control']) }}

		@if (isset($question))
			{{ Form::hidden('_method', 'PUT') }}
		@endif

		<div class="text-center">
			{{ Form::submit('Save', ['class' => 'btn btn-success btn-md']) }}
		</div>

	{{ Form::close() }}

@endsection