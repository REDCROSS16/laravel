<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticlesController;
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

// получение списка постов из таблицы articles

Route::get('/articles', [ArticlesController::class, 'showArticles']);

/**
 * получение одного поста по ID
 *  URI : {host}/api/articles/{id}
*/

Route::get('/articles/{id}', [ArticlesController::class, 'showArticle']);

/**
 * Добавление нового поста
 * URI: {host}/api/articles
 */
Route::post('/articles', [ArticlesController::class, 'storeArticle']);
