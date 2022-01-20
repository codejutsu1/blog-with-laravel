<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Article::with('category','tag', 'user')->latest()->paginate(10);
               
        return view('articles.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();
        
        $tag = new Tag();
        $category = new Category();
        $article = new Article();
        
        $articles = Article::all();

        if(empty($articles->first()->id))
        {
            $articleId = 1;
        }else
        {
            $articleId = $articles->last()->id + 1;
        }

    
        $article->title = $validated['title'];
        $article->description = $validated['description'];
        $article->user_id = $request->user()->id;

        $category->category = $validated['category'];
        $category->article_id = $articleId;

        $tag->article_id = $articleId;
        $tag->tag = $validated['tag'];
        
        $article->save();
        $tag->save();
        $category->save();

        // dd($request->all());
        // Tag::create([
        //     'tag' => $request->safe()->only(['tag']),
    
        // ]);
        // Category::create([
        //     'category' => $request->safe()->only('category')
        // ]);
        
        // Article::create([
        //   $request->safe()->only(['title','description'])
        // ]);

        return redirect()->route('articles.index')->with('success', 'Uploaded sucessful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $posts = Article::with('category', 'tag', 'user')->where('id', $article->id)->get();
        
        return view('articles.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $posts = Article::with('tag')->where('id', $article->id)->get();
        
        return view('articles.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $posts = Article::with('tag')->where('id', $article->id)->get();
        foreach($posts as $post)
        {
            $post->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
            
            $post->tag->update([
                'tag' => $request->tag
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Upload successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $posts = Article::with('category', 'tag')->where('id', $article->id)->get();
        foreach($posts as $post)
        {
            $post->delete();
        }
        return redirect()->route('dashboard');
    }

    public function list()
    {
        $posts = Article::with('category', 'tag', 'user')->where('user_id', auth()->user()->id)->get();
        return view('dashboard', compact('posts'));
    }
}
