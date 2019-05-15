<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    protected $fillable = [
        'name',
        'slug',
        'link_url',
    ];

    public function banner()
    {
        return $this->belongsTo('App\Models\Banner');
    }

    public function tour()
    {
        return $this->belongsTo('App\Models\Tour');
    }

    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
