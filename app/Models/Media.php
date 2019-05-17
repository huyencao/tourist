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
        return $this->hasOne('App\Models\Banner');
    }

    public function tour()
    {
        return $this->hasOne('App\Models\Tour');
    }

    public function news()
    {
        return $this->hasOne('App\Models\News');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
