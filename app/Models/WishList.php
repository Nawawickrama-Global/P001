<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $primaryKey = 'wish_list_id';
    protected $fillable = [
        'product_id',
        'user_id'
    ];
}
