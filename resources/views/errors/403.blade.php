@extends('layouts.errors')

@section('content')
    <div class="container">
        <div class="jumbotron error403-jumbotron">
            <h1 class="text-center">403</h1>
            <p class="text-center">{{ $exception->getMessage() }}</p>
        </div>
    </div>
@endsection