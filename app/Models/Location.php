<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at' ];
    protected $fillable = ['name','user_id','restaurant_id','address','latitude','longitude'];
}
