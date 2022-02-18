<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\User;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', [
            'articles' => $articles
        ]);
    }
    //fazer dessa forma aqui funciona da mesma forma que o 'update()'
    public function show(Article $article)
    {
        // $article = Articles::findOrFail($id);

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        $tags = Tag::all();

        // Shows a view to create a new resource
        return view('articles.create', compact('tags'));
    }

    public function store()
    {
        $this->validateArticle();

        // Persist the new resource

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        // auth()->user()->articles()->create($article);
        $article->save();

        if(request()->has('tags')){
            $article->tags()->attach(request('tags'));
        }

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // Show a view to edit an existing resource 
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    public function destroy()
    {
        // Delete the resource
    }

    protected function validateArticle()
    {
        //com esse request validate da pra fazer aquelas requisições minimas para inserir um valor no input
        //como por exemplo: a senha deve possuir no minimo de 6 a 16 caracteres...
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
