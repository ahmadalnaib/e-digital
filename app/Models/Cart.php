<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
     protected $fillable = ['user_id', 'session_id'];
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
