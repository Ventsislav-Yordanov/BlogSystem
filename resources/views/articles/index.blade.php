@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create-button-container">
            <a href="/articles/create" class="btn btn-primary">Create new article</a>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                @each('articles.displayArticle', $articles, 'article', 'articles.empty')
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection