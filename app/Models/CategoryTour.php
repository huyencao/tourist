<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTour extends Model
{
    protected $table = 'category_tour';

    protected $fillable = [
        'tour_id',
        'cate_id',
    ];
}
