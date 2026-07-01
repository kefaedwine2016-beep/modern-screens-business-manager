<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'room',
        'opening_name',
        'width',
        'height',
        'area',
        'quantity',
        'total_price',
        'notes',
    ];

    /**
     * Customer Relationship
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Product Relationship
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}