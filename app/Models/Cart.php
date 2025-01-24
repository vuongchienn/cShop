<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id','quantity'];
    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
