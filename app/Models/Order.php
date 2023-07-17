<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $guarded = [ 'created_at', 'updated_at' ,'id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //delivery_user
    public function delivery_user()
    {
        return $this->belongsTo(User::class,'delivery_user_id');
    }

    
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }



}
