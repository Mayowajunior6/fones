<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Order;
use Illuminate\Support\Str;

$factory->define(Order::class, function (Faker $faker) {

    $orderNum = 'INC'.rand(2,100);
    $addr = $faker->address;
    $order_date = $faker->dateTimeThisYear;
    return [
        'orderNumber' => $orderNum,
        'user_id' => rand(1,7),
        'status' => 'Complete',
        'order_date' => $order_date,
        'offer_id' => 0, 
        'province_id' => rand(1,12),
        'email' => $faker->unique()->email,
        'totalGST' => $faker->randomFloat(2, 10, 100),
        'totalPST' => $faker->randomFloat(2, 10, 100),
        'totalHST' => 0,
        'totaltax' => $faker->randomFloat(2, 20, 100),
        'totalAmount' => $faker->randomFloat(2, 1000, 5000),
        'billing_address' => $addr,
        'shipping_address' => $addr,
        'pointsApplied' => 0,        
        'created_at' => $order_date,
        'updated_at' => $order_date
    ];
    
});
