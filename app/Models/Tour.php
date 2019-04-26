<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = [
        'name',
        'slug',
        'media_id',
        'cate_id',
        'status',
        'type_hotel',
        'sale',
        'schedule',
        'starting_point',
        'destination',
    ];

    public function media()
    {
        return $this->hasOne('App\Models\Media');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function orderTours()
    {
        return $this->hasMany('App\Models\OrderTour');
    }

    public function typeTours()
    {
        return $this->hasMany('App\Models\TypeTour');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
