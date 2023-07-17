<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at','user_id','slug'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
