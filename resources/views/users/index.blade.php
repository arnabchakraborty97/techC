@extends('layouts.app')

@section('title')
	Users
@endsection

@section('content')
	
	@if (count($users) > 0)

		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Score</th>
					<th>Correct</th>
					<th>Wrong</th>
				</tr>
			</thead>
			<tbody class="table-light">
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->score }}</td>
						<td>{{ $user->correct }}</td>
						<td>{{ $user->wrong }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		{{ $users->links() }}

	@else

		Nothing to show

	@endif

@endsection