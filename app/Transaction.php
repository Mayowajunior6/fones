<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Transaction Model class to handle database access
 * 
 * @author Pournima Khandare <khandare-p@webmail.uwinnipeg.ca>
 * @filename Transaction.php
 * @updated_at 2020-12-05
 */

class Transaction extends Model
{
     protected $fillable = ['order_id', 'transactionDate', 'amount', 'status','response', 'updated_at'];

    /**
     * Get Province for the taxation
     *
     * @return void
     */
    // public function order()
    // {
    //     return $this->belongsTo(Order::class);
    // }
}
