<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Carrier Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Carrier.php
 * @updated_at 2020-11-30
 */
class Carrier extends Model
{
    protected $fillable = ['name', 'logo','updated_at'];

    /**
     * Get Offers function
     *
     * @return void
     */
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
