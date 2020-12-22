<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * Order model to store order information
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Offer.php
 * @updated_at 2020-12-03
 */
class Order extends Model
{
    protected $fillable = ['orderNumber', 'user_id','status', 'order_date', 'offer_id',
                            'province_id', 'email', 'totalGST', 'totalPST', 'totalHST',
                            'totaltax', 'billing_address', 'shipping_address', 'pointsApplied','totalAmount'
                            ,'updated_at'
                            ];

    /**
     * Get Order lines items function
     *
     * @return void
     */
    public function orderLineItems()
    {
        return $this->hasMany(OrderLineItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
