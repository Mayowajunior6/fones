<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_categories_table_erik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //iphone 8
        DB::table('product_categories')->insert(
        [
        'product_id' => '28',
        'category_id' => '5',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '28',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //iphone xrpromax
        DB::table('product_categories')->insert(
        [
        'product_id' => '29',
        'category_id' => '1',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '29',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //iphone 11
        DB::table('product_categories')->insert(
        [
        'product_id' => '30',
        'category_id' => '3',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '30',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //iphone 11 pro
        DB::table('product_categories')->insert(
        [
        'product_id' => '31',
        'category_id' => '1',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '31',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //iphone 12
        DB::table('product_categories')->insert(
        [
        'product_id' => '32',
        'category_id' => '1',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '32',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //iphone 12 pro
        DB::table('product_categories')->insert(
        [
        'product_id' => '33',
        'category_id' => '1',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '33',
        'category_id' => '7',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //Xiaomi Redmi Note9
        DB::table('product_categories')->insert(
        [
        'product_id' => '15',
        'category_id' => '17',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '15',
        'category_id' => '9',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '15',
        'category_id' => '16',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '15',
        'category_id' => '1',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '15',
        'category_id' => '4',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        //Xiaomi Note 9s
        DB::table('product_categories')->insert(
        [
        'product_id' => '16',
        'category_id' => '9',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '16',
        'category_id' => '16',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '16',
        'category_id' => '17',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('product_categories')->insert(
        [
        'product_id' => '16',
        'category_id' => '4',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
    }
}
