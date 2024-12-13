<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','total_price'];
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'transaction_products', 'transaction_id', 'product_id')->withPivot(['quantity']);
    }
}
