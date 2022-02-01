<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Psy\Util\Json;
use Validator;

class ArticlesController extends Controller
{
    /**
     * Получить все посты
     * @return \Illuminate\Http\JsonResponse
     */
    public function showArticles() : \Illuminate\Http\JsonResponse
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * Показать один пост
     */
    public function showArticle($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json([
                'status'  => 'false',
                'message' => 'post not found'
            ])->setStatusCode('404', '# POST NOT FOUND #');
        }
        return response()->json($article);
    }

    /**
     * Добавление постов через API
     */
    public function storeArticle(Request $request)
    {

        $request_data = $request->only(['title', 'body']);

        $validator = Validator::make($request_data, [
            'title' => ['required', 'string'],
            'body'  => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->messages()
            ])->setStatusCode(422);
        }

        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return response()->json([
            'status'  => true,
            'article' => $article
        ])->setStatusCode(201, 'Article Created');

    }
}
