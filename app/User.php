<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\UserAddress;
use App\Order;

/**
 * USer Model class to handle database access
 * 
 * @author Team Incredible 
 * @filename User.php
 * @updated_at 2020-12-05
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone', 'isAdmin', 'points', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userAddress()
    {

        return $this->hasMany(UserAddress::class);
 
   }

   public function order(){

        return $this->hasMany(Order::class);

    }

    public function getGravatarAttribute()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://www.gravatar.com/avatar/$hash";
    }
}
