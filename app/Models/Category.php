<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class);
    }

    //belongsTo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
