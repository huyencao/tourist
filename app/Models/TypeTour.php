<?php

namespace App\Models;

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
        'start_day',
        'end_day',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }
}
