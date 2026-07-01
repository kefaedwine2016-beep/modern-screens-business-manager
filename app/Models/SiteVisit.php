<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    protected $fillable = [

        'customer_id',
        'visit_number',
        'visit_date',
        'property_name',
        'estate',
        'technician',
        'status',
        'notes',

    ];

    /**
     * A Site Visit belongs to one customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * A Site Visit has many Areas.
     */
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}