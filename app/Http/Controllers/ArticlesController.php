<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\createArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::latest()->published()->get();
        return view("articles.index",compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
       // dd($article);
        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(createArticleRequest $request){
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(createArticleRequest $request,$id){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
