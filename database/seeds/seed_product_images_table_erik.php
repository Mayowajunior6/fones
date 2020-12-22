<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_images_table_erik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('product_images')->insert(
        [
        'product_id' => '28',
        'image' => 'apple_iphone8_silver_main_2.png',
        'color'=> 'Silver',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '29',
        'image' => 'apple_iphonexrpromax_black_main_9.png',
        'color'=> 'Black',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '30',
        'image' => 'apple_iphone11_red_main_3.png',
        'color'=> 'Red',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '31',
        'image' => 'apple_iphone11pro_black_main_4.png',
        'color'=> 'Black',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '32',
        'image' => 'apple_iphone12_black_main_6.png',
        'color'=> 'Black',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '33',
        'image' => 'apple_iphone12pro_black_main_7.png',
        'color'=> 'Black',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '15',
        'image' => 'Xiaomi_RedmiNote9_ForestGreen_main_1.png',
        'color'=> 'Green',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '15',
        'image' => 'Xiaomi_RedmiNote9_MidnightGrey_main_1.png',
        'color'=> 'Grey',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '15',
        'image' => 'Xiaomi_RedmiNote9_OnyxBlack_main_1.png',
        'color'=> 'Black',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '15',
        'image' => 'Xiaomi_RedmiNote9_PolarWhite_main_1.png',
        'color'=> 'White',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '16',
        'image' => 'Xiaomi_RedmiNote9S_GlacierWhite_main_1.png',
        'color'=> 'White',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '16',
        'image' => 'Xiaomi_RedmiNote9S_TropicalGreen_main_1.png',
        'color'=> 'Green',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        DB::table('product_images')->insert(
        [
        'product_id' => '16',
        'image' => 'Xiaomi_RedmiNote9S_InterstellarGrey_main_1.png',
        'color'=> 'Grey',
        'type'=>'main',
        'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

        


    }
}
