<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_images_table_pournima extends Seeder
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
    	 		'product_id' => '1',
                'image' => 'google_pixel_white_main_1.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]

    	 );

        DB::table('product_images')->insert(

    	 	[
    	 		'product_id' => '1',
                'image' => 'google_pixel_white_main_2.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(20)   
    	 	]

    	 );

        DB::table('product_images')->insert(

    	 	[
    	 		'product_id' => '2',
                'image' => 'google_pixel2_black_main_1.jpg',
    	 		'color'=> 'Black',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(30)   
    	 	]

    	 );
        DB::table('product_images')->insert(

    	 	[
    	 		'product_id' => '2',
                'image' => 'google_pixel2_black_main_2.jpg',
    	 		'color'=> 'Black',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(40)   
    	 	]

    	 );
        DB::table('product_images')->insert(

    	 	[
    	 		'product_id' => '3',
                'image' => 'google_pixel2XL_white_main_1.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(50)   
    	 	]

    	 );

      //    DB::table('product_images')->insert(
    	 // 	[
    	 // 		'product_id' => '3',
      //           'image' => 'google_pixel2XL_white_main_2.jpg',
    	 // 		'color'=> 'Black',	 		
    	 // 		'type'=>'main',    	 		
    	 // 		'created_at'=>Carbon::Now()->addSeconds(60)   
    	 // 	]

    	 // );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '4',
                'image' => 'google_pixel3a_black_main_1.jpg',
    	 		'color'=> 'Black',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]

    	 );

         //id 5 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '5',
                'image' => 'google_pixel3_pink_main_1.jpg',
    	 		'color'=> 'Pink',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]

    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '5',
                'image' => 'google_pixel3_pink_main_2.jpg',
    	 		'color'=> 'Pink',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]

    	 );
    	 //id 5 end
    	 //
    	 
    	 //id 6 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '6',
                'image' => 'google_pixel3XL_black_main_1.jpg',
    	 		'color'=> 'Black',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '6',
                'image' => 'google_pixel3XL_black_back_main_2.jpg',
    	 		'color'=> 'Black',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );
    	 //id 6 end


        //id 7 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '7',
                'image' => 'google_pixel4_orange_main_1.jpg',
    	 		'color'=> 'Orange',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '7',
                'image' => 'google_pixel4_orange_main_2.jpg',
    	 		'color'=> 'Orange',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );
    	 //id 7 end 
    	

    	//id 8 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '8',
                'image' => 'google_pixel4XL_white_main_1.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '8',
                'image' => 'google_pixel4XL_white_main_2.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );
    	 //id 8 end 
    	 

    	 //id 9 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '9',
                'image' => 'google_pixel4a_white_main_1.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '9',
                'image' => 'google_pixel4a_white_main_2.jpg',
    	 		'color'=> 'White',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );
    	 //id 9 end 
    	 //
    	 
    	  //id 10 start
    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '10',
                'image' => 'google_pixel5_silver_main_1.jpg',
    	 		'color'=> 'Silver',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );

    	 DB::table('product_images')->insert(
    	 	[
    	 		'product_id' => '10',
                'image' => 'google_pixel5_silver_main_2.jpg',
    	 		'color'=> 'Silver',	 		
    	 		'type'=>'main',    	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)   
    	 	]
    	 );
    	 //id 9 end 
    	 
    	 





    }
}
