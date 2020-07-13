<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Get all articles
Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
// Get article
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

// Create article
Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});
// Update article
Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});
// Delete article
Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
