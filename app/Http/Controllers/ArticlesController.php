<?php

namespace App\Http\Controllers;

use App\Article;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;
        $this->TryToSaveArticleToDatabase($request, $article);
        return redirect()->action('ArticlesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        $selectedTags = $article->tags->pluck('id');
        $this->CheckIsForbidden($article);
        return view('articles.edit', compact('article', 'tags', 'selectedTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->CheckIsForbidden($article);
        $this->TryToSaveArticleToDatabase($request, $article);
        return redirect()->action('ArticlesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $this->CheckIsForbidden($article);

        try {
            $article->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->action('ArticlesController@index');
    }

    /**
     * @param Article $article
     */
    public function CheckIsForbidden(Article $article)
    {
        if ($article->user->id != Auth::id()) {
            abort(403, 'Access to this resource on the server is denied!');
        }
    }

    /**
     * @param Request $request
     * @param Article $article
     */
    public function TryToSaveArticleToDatabase(Request $request, Article $article)
    {
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->user_id = Auth::id();
        try {
            $article->saveOrFail();
            if ($request->has('tags')) {
                $article->tags()->sync($request->input('tags'));
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
