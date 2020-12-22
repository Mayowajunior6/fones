<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 //use App\Category;
/**
 * Product Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Product.php
 * @updated_at 2020-11-30
 */
class Product extends Model
{
    protected $fillable = ['name', 'slug', 'is_avaliable', 'dimensions', 'weight',
                            'operatingSystem','displaysize', 'camera','shortdescription', 'longdescription',
                            'pixel', 'memory','updated_at', 'unitprice'
                        ];    
    
    public function categories()
    {
        return $this->belongsToMany('App\Category','product_categories');
                                    
    }

    /**
     * Get Product images function
     * 
     * @return void
     */
    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }
}
