@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create-button-container">
            <a href="/articles/create" class="btn btn-primary">Create new article</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                @each('articles.displayArticle', $articles, 'article', 'articles.empty')
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection