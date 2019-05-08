<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'cate_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function places()
    {
        return $this->hasMany('App\Models\Place');
    }
}
