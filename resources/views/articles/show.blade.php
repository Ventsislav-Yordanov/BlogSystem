@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $article->title }}</div>
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
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
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