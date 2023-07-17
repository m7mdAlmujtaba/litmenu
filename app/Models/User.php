<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relation with restaurant
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
    //relation with category
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    //relation with product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    //relation with location
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    //relation with order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }



}
