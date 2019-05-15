<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    protected $fillable = [
        'name',
    ];

    public function city()
    {
        return $this->hasMany('App\Models\City');
    }
}
