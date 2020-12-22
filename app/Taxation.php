<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Taxation Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Taxation.php
 * @updated_at 2020-11-30
 */
class Taxation extends Model
{
    protected $fillable = ['province_id', 'gst', 'pst', 'hst','country', 'updated_at'];

    /**
     * Get Province for the taxation
     *
     * @return void
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
