<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_attribute_id';
    protected $fillable = [
        'variant_id',
        'attribute_id',
        'value'
    ];

    public function attribute(): HasOne{
        return $this->hasOne(Attribute::class, 'attribute_id', 'attribute_id');
    }
}
