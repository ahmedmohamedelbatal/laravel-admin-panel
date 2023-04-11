<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_price', 'category_id', 'product_image', 'product_description'];
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
