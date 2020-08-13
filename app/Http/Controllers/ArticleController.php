<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //Get all articles
    public function index()
    {
        return Article::all();
    }
    // Get one article
    public function show(Article $article)
    {
        return $article;
    }
    // Create article
    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }
    // Update article
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }
    // Delete article
    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
