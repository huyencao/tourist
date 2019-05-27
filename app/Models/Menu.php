<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
        'location',
        'cate_id',
        'type_menu',
        'link',
    ];

    public function categoryNews()
    {
        return $this>hasMany(CategoryNews::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
