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
        'total',
        'total_sale',
        'vehicle',
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

    public function scopeName($query, $request)
    {
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        return $query;
    }

    public function scopeDeparture($query, $request)
    {
        if ($request->has('starting_point')) {
            $query->where('starting_point', 'LIKE', '%' . $request->starting_point . '%');
        }

        return $query;
    }

    public function scopeDestination($query, $request)
    {
        if ($request->has('destination')) {
            $query->where('destination', 'LIKE', '%' . $request->destination . '%');
        }

        return $query;
    }

    public function scopePrice($query, $start_price, $end_price)
    {
        if (($start_price) && ($end_price)) {
            return $query->where('total', '>', $start_price)->where('total', '<', $end_price);
        }
        
        return $query;
    }
}
