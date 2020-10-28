<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(Request $request)
    {
        Article::create($request->all());
    }


    public function show($id)
    {
        return Article::findOrFail($id);
    }



    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
    }


    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
    }
}
