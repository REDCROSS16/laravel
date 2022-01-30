<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Psy\Util\Json;

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
}
