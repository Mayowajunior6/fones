<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 //use App\Product;
/**
 * Category Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Category.php
 * @updated_at 2020-11-30
 */
class Category extends Model
{

    protected $fillable = ['name', 'type','description', 'active', 'updated_at'];

    /**
     * Get all products
     *
     * @return void
     */
    // public function products()
    // {
    //     return $this->belongsToMany('App\Product');
    // }

    public function products()
    {
        return $this->belongsToMany('App\Product','product_categories');
    }

    
}
