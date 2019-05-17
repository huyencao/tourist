<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'name',
        'slug',
        'cate_id',
        'media_id',
        'status',
        'description',
        'content',
    ];

    public function media()
    {
        return $this->belongsTo('App\Models\Media');
    }

    public function categoryNews()
    {
        return $this->belongsTo('App\Models\CategoryNews');
    }
}
