<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'title',
        'sku',
        'product_type',
        'feature_image',
        'product_image',
        'short_description',
        'long_description',
        'status',
        'sale_price',
        'stock'
    ];
}
