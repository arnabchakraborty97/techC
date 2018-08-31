@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to Tech C!</div>

                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('contest') }}" class="btn btn-success btn-md">Start Contest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
