<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_attribute_id';
    protected $fillable = [
        'product_id',
        'attribute_id',
        'value'
    ];
}
