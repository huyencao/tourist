<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTour extends Model
{
    protected $table = 'order_tours';

    protected $fillable = [
        'tour_id',
        'user_id',
        'start_day',
        'number_baby',
        'number_child',
        'number_adult',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}
