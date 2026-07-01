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
     * Customer has many Site Visits.
     */
    public function siteVisits()
    {
        return $this->hasMany(SiteVisit::class);
    }

    /**
     * (Legacy - will be removed after migration to Version 2)
     */
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}