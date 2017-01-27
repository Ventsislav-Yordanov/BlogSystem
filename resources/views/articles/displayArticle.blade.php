<div class="panel panel-default">
    <div class="panel-heading">
        <a href="{{ route('show.article', ['id' => $article->id]) }}">{{ $article->title }}</a>
    </div>
    <div class="panel-body">{{ $article->content }}</div>
    <div class="panel-footer">
        @foreach ($article->tags as $tag)
            <a class="btn btn-primary btn-xs" href="{{route('byTag.article', ['id' => $tag->id])}}">
                {{ $tag->name }}
            </a>
        @endforeach
        <div>
            Written by: {{ $article->user->name }}
        </div>
    </div>
</div>