<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Order Line Items model to store order information
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Offer.php
 * @updated_at 2020-12-03
 */
class OrderLineItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'unitprice', 'quantity','updated_at'];

    /**
     * Get product for the taxation
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
