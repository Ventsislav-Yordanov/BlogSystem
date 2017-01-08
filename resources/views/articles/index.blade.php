@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-bottom: 10px">
            <a href="/articles/create" class="btn btn-primary">Create new article</a>
        </div>

        <div class="row">
            <div class="col-md-6 article">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $article->title }}</div>
                        <div class="panel-body">{{ $article->content }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection('content')