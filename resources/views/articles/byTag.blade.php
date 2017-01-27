@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @each('articles.displayArticle', $articles, 'article')
            </div>
        </div>
    </div>
@endsection