<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'sale_price','hor_image','ver_image','stock','release_date','category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
