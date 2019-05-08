<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

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

    public function tours()
    {
        return $this->belongsToMany('App\Models\Tour');
    }

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}
