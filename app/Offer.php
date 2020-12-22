<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Offer Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Offer.php
 * @updated_at 2020-11-30
 */
class Offer extends Model
{
    protected $fillable = ['description', 'carrier_id', 'product_id', 'points', 'updated_at'];

    /**
     * Get product for the taxation
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get Carrier for the taxation
     *
     * @return void
     */
    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
