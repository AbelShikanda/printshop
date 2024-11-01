<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    
    /**
    * Get the orders.
    */
    public function orders()
    {
        return $this->belongsTo(orders::class);
    }
    
    /**
    * Get the products.
    */
    public function products()
    {
        return $this->hasMany(Products::class);
    }
    
    /**
    * Get the Size.
    */
    public function Size()
    {
        return $this->belongsTo(Size::class);
    }
    
    /**
    * Get the Color.
    */
    public function Color()
    {
        return $this->belongsTo(Color::class);
    }
}
