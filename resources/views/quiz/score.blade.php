@extends('layouts.app')

@section('title')
	Score
@endsection

@section('content')
	<h1>
		Correct : {{ Auth::user()->correct }}<br>
		Wrong : {{ Auth::user()->wrong }}<br>
		Score : {{ Auth::user()->score }}
	</h1>
@endsection
