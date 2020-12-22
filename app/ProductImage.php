<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * ProductImage Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename ProductImage.php
 * @updated_at 2020-11-30
 */
class ProductImage extends Model
{
    protected $fillable = ['product_id','color', 'image', 'type', 'updated_at'
                            ];
    /**
     * Get product function
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
