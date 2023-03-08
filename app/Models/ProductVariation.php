<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariation extends Model
{
    use HasFactory;
    protected $primaryKey = 'variant_id';
    protected $fillable = [
        'product_id',
        'regular_price',
        'sales_price',
        'stock',
        'color',
        'image',
    ];
    public function product(): BelongsTo{
        return $this->BelongsTo(Product::class,);
    }
}
