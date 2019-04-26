<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeTour extends Model
{
    protected $table = 'type_tour';

    protected $fillable = [
        'tour_id',
        'baby_price',
        'child_price',
        'adult_price',
        'tour_code',
        'departure_day',
        'start_day',
        'end_day',
    ];

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}
