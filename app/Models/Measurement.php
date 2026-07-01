<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'customer_id',
        'room',
        'opening_name',
        'width',
        'height',
        'screen_type',
        'quantity',
        'notes',
    ];

    /**
     * A measurement belongs to one customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}