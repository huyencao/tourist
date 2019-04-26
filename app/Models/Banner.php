<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Models
{
    protected $table = 'banners';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'media_id',
        'location',
    ];

    public function media()
    {
        return $this->hasOne('App\Models\Media');
    }
}
