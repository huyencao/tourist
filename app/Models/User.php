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
        'password_reset',
    ];

    public function media()
    {
        return $this->belongsTo(Media::class, 'avatar_id', 'id');
    }

    public function orderTours()
    {
        return $this->hasMany(OrderTour::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
