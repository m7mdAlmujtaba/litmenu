<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = [];
    //belongsTo Category
    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
    //belongsTo Restaurant
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    //belongsTo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    



}
