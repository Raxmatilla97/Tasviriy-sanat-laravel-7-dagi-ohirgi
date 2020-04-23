<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class ArticleCategory extends Model
{
    protected $table = 'article_category';

    protected $fillable = [
        'title',
        'slug',
        'img',
      
    ];

    public function article()
    {
        return $this->hasMany(Article::class, 'cate_id');
    }
}
