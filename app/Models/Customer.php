<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name',
        'phone',
        'email',
        'address',
        'location',
    ];

    /**
     * A customer can have many measurements.
     */
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}