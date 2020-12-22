<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_images_table_shristi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Huwawei P40  id: 11
        // 
         DB::table('product_images')->insert(
			 [
			'product_id' => '11',
			'image' => 'huawei_p40_blue_main_1.png',
			'color'=> 'Blue',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);
        
		DB::table('product_images')->insert(
			 [
			'product_id' => '11',
			'image' => 'huawei_p40_black_main_2.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_black_main_2.png',
		// 	'color'=> 'Black',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_black_main_3.png',
		// 	'color'=> 'Black',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

       

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_blue_main_2.png',
		// 	'color'=> 'Blue',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_blue_main_3.png',
		// 	'color'=> 'Blue',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		DB::table('product_images')->insert(
			 [
			'product_id' => '11',
			'image' => 'huawei_p40_pink_main_2.png',
			'color'=> 'Pink',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_pink_main_2.png',
		// 	'color'=> 'Pink',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_pink_main_3.png',
		// 	'color'=> 'Pink',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		DB::table('product_images')->insert(
			 [
			'product_id' => '11',
			'image' => 'huawei_p40_silver_main_2.png',
			'color'=> 'Silver',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_silver_main_2.png',
		// 	'color'=> 'Silver',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_silver_main_3.png',
		// 	'color'=> 'Silver',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		DB::table('product_images')->insert(
			 [
			'product_id' => '11',
			'image' => 'huawei_p40_white_main_2.png',
			'color'=> 'White',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_white_main_2.png',
		// 	'color'=> 'White',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '11',
		// 	'image' => 'huawei_p40_white_main_3.png',
		// 	'color'=> 'White',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		 // Huwawei Mate 40 RS  id: 12
		 
		 DB::table('product_images')->insert(
			 [
			'product_id' => '12',
			'image' => 'huawei_mate40rs_black_main_1.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		 DB::table('product_images')->insert(
			 [
			'product_id' => '12',
			'image' => 'huawei_mate40rs_white_main.png',
			'color'=> 'White',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


		 // Huwawei Mate 30 Pro  id: 35
		 
		 DB::table('product_images')->insert(
			 [
			'product_id' => '35',
			'image' => 'huawei_mate30pro_blue_main_2.png',
			'color'=> 'Blue',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


		//   DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '35',
		// 	'image' => 'huawei_mate30pro_blue_main_2.png',
		// 	'color'=> 'Blue',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );

		// Huwawei Nova 7  id: 34
		  
		  DB::table('product_images')->insert(
			 [
			'product_id' => '34',
			'image' => 'huawei_nova7_black_main_1.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

		//  DB::table('product_images')->insert(
		// 	 [
		// 	'product_id' => '34',
		// 	'image' => 'huawei_nova7_black_main_2.png',
		// 	'color'=> 'Black',
		// 	'type'=>'main',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// 	]

		// );


		 // LG Velvet  id: 13
        
         DB::table('product_images')->insert(
			 [
			'product_id' => '13',
			'image' => 'LG_Velvet_grey_main_1.png',
			'color'=> 'Grey',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


         DB::table('product_images')->insert(
			 [
			'product_id' => '13',
			'image' => 'LG_Velvet_grey_main_2.png',
			'color'=> 'Grey',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


        DB::table('product_images')->insert(
			 [
			'product_id' => '13',
			'image' => 'LG_Velvet_grey_main_3.png',
			'color'=> 'Grey',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);
        DB::table('product_images')->insert(
			 [
			'product_id' => '13',
			'image' => 'LG_Velvet_pink_main.png',
			'color'=> 'Pink',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

         // LG G7 fit  id: 14

         DB::table('product_images')->insert(
			 [
			'product_id' => '14',
			'image' => 'LG_G7fit_black_main_1.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

         DB::table('product_images')->insert(
			 [
			'product_id' => '14',
			'image' => 'LG_G7fit_black_main_2.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

         DB::table('product_images')->insert(
			 [
			'product_id' => '14',
			'image' => 'LG_G7fit_black_main_3.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


         // LG G8 ThinQ  id: 36
         
          DB::table('product_images')->insert(
			 [
			'product_id' => '36',
			'image' => 'LG_G8thinq_black_main_1.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

          DB::table('product_images')->insert(
			 [
			'product_id' => '36',
			'image' => 'LG_G8thinq_black_main_2.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

        // Samsung Galaxy S20 Fan  id: 21
        
         DB::table('product_images')->insert(
			 [
			'product_id' => '21',
			'image' => 'samsung_s20_grey.png',
			'color'=> 'Grey',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);
         
         // Samsung Galaxy A21s  id: 22

          DB::table('product_images')->insert(
			 [
			'product_id' => '22',
			'image' => 'samsung_galaxy_a21s_while.png',
			'color'=> 'White',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


         // Samsung Galaxy S20 FE 5G  id: 23

          DB::table('product_images')->insert(
			 [
			'product_id' => '23',
			'image' => 'samsung_galaxy_s20fe_red.png',
			'color'=> 'Red',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

         // Samsung Galaxy Fold  id: 24

          DB::table('product_images')->insert(
			 [
			'product_id' => '24',
			'image' => 'samsung_galaxy_fold_pink.png',
			'color'=> 'Pink',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

        // Samsung Galaxy A42 5G id: 25
        
         DB::table('product_images')->insert(
			 [
			'product_id' => '25',
			'image' => 'samsung_galaxy_a42_black.png',
			'color'=> 'Black',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);


        // Samsung Galaxy Note9 id: 26
        
         DB::table('product_images')->insert(
			 [
			'product_id' => '26',
			'image' => 'samsung_galaxy_note9_blue.png',
			'color'=> 'Blue',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

        // Samsung Galaxy S III id: 27
        
         DB::table('product_images')->insert(
			 [
			'product_id' => '27',
			'image' => 'samsung_galaxy_s3I_white.png',
			'color'=> 'White',
			'type'=>'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]

		);

    }
}
