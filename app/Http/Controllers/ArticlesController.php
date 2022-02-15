<?php

namespace App\Http\Controllers;

use App\Articles;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        
        // $articles = DB::table('articless')->where('slug', $slug)->first();
        $articles = Articles::latest()->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }
    //fazer dessa forma aqui funciona da mesma forma que o 'update()'
    public function show(Articles $article)
    {
        // $article = Articles::findOrFail($id);

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        // Shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        //com esse request validate da pra fazer aquelas requisições minimas para inserir um valor no input
        //como por exemplo: a senha deve possuir no minimo de 6 a 16 caracteres...

        // Persist the new resource

        Articles::create($this->validateArticle());
        

        return redirect(route('articles.index'));
    }

    public function edit(Articles $article)
    {
        // Show a view to edit an existing resource 
        return view('articles.edit', compact('article'));
    }

    public function update(Articles $article)
    {
        $article->update($this->validateArticle());

        return redirect(route('articles.show',$article));
    }

    public function destroy()
    {
        // Delete the resource
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
