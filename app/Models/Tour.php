<?php

namespace App\Models;

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
        return $this->belongsTo(Media::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function orderTours()
    {
        return $this->hasMany(OrderTour::class);
    }

    public function typeTour()
    {
        return $this->hasOne(TypeTour::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
