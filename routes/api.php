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
Route::get('articles','ArticleController@index');
// Get article
Route::get('articles/{id}','ArticleController@show');
// Create article
Route::post('articles', 'ArticleController@store');
// Update article
Route::put('articles/{id}', 'ArticleController@update');
// Delete article
Route::delete('articles/{id}', 'ArticleController@delete');

Route::post('register', 'Auth\RegisterController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

