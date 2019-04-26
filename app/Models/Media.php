<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'media_id',
        'location',
    ];

}
