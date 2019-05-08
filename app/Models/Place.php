<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
