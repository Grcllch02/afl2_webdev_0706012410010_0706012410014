<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 
        'category_id', 
        'price', 
        'stock_quantity', 
        'image_url'
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}