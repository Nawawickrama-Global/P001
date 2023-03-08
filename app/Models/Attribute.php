<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $primaryKey = 'attribute_id';
    protected $fillable = [
        'name',
        'values',
        'status'
    ];
}
