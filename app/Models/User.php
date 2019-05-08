<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'fullname',
        'role',
        'avatar_id',
    ];

    public function media()
    {
        return $this->hasOne('App\Models\Media');
    }

    public function orderTours()
    {
        return $this->hasMany('App\Models\OrderTour');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }
}
