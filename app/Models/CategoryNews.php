<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = 'category_news';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
        'menu_id',
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
}
