<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;

class User extends \Eloquent implements Authenticatable, CanResetPasswordContract
{
    use AuthenticableTrait, CanResetPassword;
    use Notifiable;
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
