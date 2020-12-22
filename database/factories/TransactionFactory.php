<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Transaction;
use Illuminate\Support\Str;

$factory->define(Transaction::class, function (Faker $faker, $order_id) {

    $response = '{"ref_number":"2","result_code":"ok","result_message":"Connection successful","transaction_response":{"response_code":"1","auth_code":"2020-13425","errors":[],"trans_id":13425}}';
    return [
        'order_id' => $order_id,
        'transactionDate' => $faker->dateTimeThisYear,
        'amount' => $faker->randomFloat(2, 1000, 2000),
        'status' => 'S',
        'response' => $response,
        'created_at' => $faker->dateTimeThisYear
    ];
    
});
