<?php
/**
 * Model for Province
 * @file Province.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-2
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserAddress;

/**
 * Province Model class to handle database access
 * 
 * @author Andrew Tsang <tsang-c19@webmail.uwinnipeg.ca>
 * @filename Province.php
 * @updated_at 2020-11-30
 */
class Province extends Model
{
    protected $fillable = ['name', 'updated_at'];

    /**
     * Get Taxation  function
     *
     * @return void
     */
    public function taxation()
    {
        return $this->hasMany(Taxation::class);
    }

    public function userAddress()
    {

        return $this->hasMany(UserAddress::class);
 
   }
}
