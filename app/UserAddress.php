<?php
/**
 * Model for User Address
 * @file UserAddress.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-2
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Province;


class UserAddress extends Model
{

    protected $fillable = ['user_id', 'address1', 'address2', 'city', 'postal', 'province_id', 'country', 'shippingAddress', 'billingAddress'];

    /**
     * Get User for the user address
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
