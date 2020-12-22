<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\OrderLineItem;
use Illuminate\Support\Str;

$factory->define(OrderLineItem::class, function (Faker $faker, $order_id) {

    
    return [
        'order_id' => $order_id,
        'product_id' => rand(1,7),
        'unitprice' => $faker->randomFloat(2, 1000, 2000),
        'quantity' => rand(1,3),
        'created_at' => $faker->dateTimeThisYear
    ];
    
});
