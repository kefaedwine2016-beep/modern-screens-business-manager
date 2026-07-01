<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'unit',
        'selling_price',
        'description',
        'active',
    ];
}