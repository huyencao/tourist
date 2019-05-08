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
    ];

    public function categoryNews()
    {
        return $this>hasMany('App\Models\CategoryNews');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
}
