<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = 'category_news';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
    ];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

    public function scopeParent($query)
    {
        return $query->where('parent_id', 0);
    }
}
