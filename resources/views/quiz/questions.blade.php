@extends('layouts.app')

@section('title')
	Questions
@endsection

@section('content')
	

	@if (count($questions) > 0)
		
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Question</th>
					<th colspan="2">Actions</th>
				</tr>
			</thead>
			<tbody class="table-light">
				@foreach($questions as $question)
					<tr>
						<td>{{ $question->id }}</td>
						<td>{{ $question->question }}</td>
						<td><a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
						<td>
							{!! Form::open(['action' => ['QuestionController@destroy', $question->id], 'method' => 'POST']) !!}

								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}

							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		


	@else
		Nothing to Show
	@endif

	<div class="text-center">
		<a href="{{ route('questions.create') }}" class="btn btn-success btn-md">Create Question</a>
	</div>

@endsection