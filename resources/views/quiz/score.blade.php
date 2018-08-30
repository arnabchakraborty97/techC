@extends('layouts.app')

@section('title')
	Score
@endsection

@section('content')
	<h1>
		Correct : {{ $correct }}<br>
		Wrong : {{ $wrong }}<br>
		Score : {{ $score }}
	</h1>
@endsection