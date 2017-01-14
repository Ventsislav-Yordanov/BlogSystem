@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create-button-container">
            <a href="/articles/create" class="btn btn-primary">Create new article</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('show.article', ['id' => $article->id]) }}">{{ $article->title }}</a>
                        </div>
                        <div class="panel-body">{{ $article->content }}</div>
                        <div class="panel-footer">
                            @foreach ($article->tags as $tag)
                                <span class="label label-primary">{{ $tag->name }}</span>
                            @endforeach
                            <div>
                                Written by: {{ $article->user->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection