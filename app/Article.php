<?php

namespace App;

use App\User;
use App\ArticleCategory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'yangiliklar';

    protected $fillable = [
        'title',
        'slug',
        'active',
        'desc',
        'smal_desc',
        'image',
        'user_id',
        'cate_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'cate_id');
    }
}
