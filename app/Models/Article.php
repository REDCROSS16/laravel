<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //метод чтобы получить связи
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
