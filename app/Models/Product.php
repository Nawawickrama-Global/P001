<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'category_id',
        'short_description',
        'long_description',
        'status',
        'sale_price',
        'stock'
    ];

    public function variant(): HasMany{
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

    public function category(): HasOne{
        return $this->hasOne(Category::class, 'category_id');
    }

    public function wishList(): HasMany{
        return $this->hasMany(WishList::class, 'product_id');
    }

}
