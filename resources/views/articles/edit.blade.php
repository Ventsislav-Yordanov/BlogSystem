@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-push-1">
            <form method="post" action="/articles/{{ $article->id }}" class="form-horizontal">
                <fieldset>
                    <legend>Create new article</legend>

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input value="{{ $article->title }}" type="text" class="form-control" name="title" id="title" placeholder="Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="10" name="content" id="content">{{ $article->content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Tags</label>
                        <div class="col-lg-10">
                            <select multiple="" class="form-control" name="tags[]">
                                @foreach($tags as $tag)
                                    <option {{ $selectedTags->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        $('select').select2({
            placeholder: 'Choose the tags'
        });
    </script>
@endsection