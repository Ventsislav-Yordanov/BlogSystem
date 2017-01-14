@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 article">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>
                    <div class="panel-body">{{ $article->content }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="/articles/{{ $article->id }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a class="btn btn-primary" href="{{ route('edit.article', ['id' => $article->id]) }}">Edit</a>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection