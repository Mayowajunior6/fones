<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_images_table_aman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// id 37
        DB::table('product_images')->insert(
			[
			'product_id' => '37',
			'image' => 'motorola_Moto_E_blue_main_1.jpg',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		
		//id 38
		DB::table('product_images')->insert(
			[
			'product_id' => '38',
			'image' => 'motorola_g8_blue_main_1.jpg',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		//id 39
		DB::table('product_images')->insert(
			[
			'product_id' => '39',
			'image' => 'motorola_Moto_G6_blue_main_1.jpg',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		//id 40
		DB::table('product_images')->insert(
			[
			'product_id' => '40',
			'image' => 'motorola_Moto_G7_black_main_1.jpg',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		//id 41
		DB::table('product_images')->insert(
			[
			'product_id' => '41',
			'image' => 'motorola_moto_Z_XT_black_main_1.jpg',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 42
		DB::table('product_images')->insert(
			[
			'product_id' => '42',
			'image' => 'motorola_one_fusion_blue_main_1.jpg',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 43
		DB::table('product_images')->insert(
			[
			'product_id' => '43',
			'image' => 'motorola_razr_black_main_3.jpg',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// id 44
		// Color Black
		DB::table('product_images')->insert(
			[
			'product_id' => '44',
			'image' => 'motorola_one_hyper_black_main_1.jpg',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Blue
		DB::table('product_images')->insert(
			[
			'product_id' => '44',
			'image' => 'motorola_one_hyper_blue_main_3.jpg',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		
		// id 45
		// Color White
		DB::table('product_images')->insert(
			[
			'product_id' => '45',
			'image' => 'motorola_g_fast_white_main_1.jpg',
			'color'=> 'White',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 46 -> Alcatel
		// Color White
		DB::table('product_images')->insert(
			[
			'product_id' => '46',
			'image' => 'Alcatel_Go_Flip_3_black_main_1.jpg',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 20 -> Xiaomi -> GOING 20 TO DOWNWARDS
		// Color Blue
		DB::table('product_images')->insert(
			[
			'product_id' => '20',
			'image' => 'Xiaomi_Mi10TPro5G_AuroraBlue_main_1.png',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Black
		DB::table('product_images')->insert(
			[
			'product_id' => '20',
			'image' => 'Xiaomi_Mi10TPro5G_CosmicBlack_main_1.png',
			'color'=> 'Black',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Silver
		DB::table('product_images')->insert(
			[
			'product_id' => '20',
			'image' => 'Xiaomi_Mi10TPro5G_LunarSilver_main_1.png',
			'color'=> 'Silver',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 19 -> Xiaomi
		// Color Blue
		DB::table('product_images')->insert(
			[
			'product_id' => '19',
			'image' => 'Xiaomi_Mi10Lite_AuroraBlue_main_1.png',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color GREY
		DB::table('product_images')->insert(
			[
			'product_id' => '19',
			'image' => 'Xiaomi_Mi10Lite_CosmicGray_main_1.png',
			'color'=> 'Grey',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color White
		DB::table('product_images')->insert(
			[
			'product_id' => '19',
			'image' => 'Xiaomi_Mi10Lite_DreamWhite_main_1.png',
			'color'=> 'White',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 18 -> Xiaomi
		// Color Grey
		DB::table('product_images')->insert(
			[
			'product_id' => '18',
			'image' => 'Xiaomi_Redmi9C_MidnightGrey_main_1.png',
			'color'=> 'Grey',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Blue
		DB::table('product_images')->insert(
			[
			'product_id' => '18',
			'image' => 'Xiaomi_Redmi9C_TwilightBlue_main_1.png',
			'color'=> 'Blue',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Orange
		DB::table('product_images')->insert(
			[
			'product_id' => '18',
			'image' => 'Xiaomi_Redmi9C_SunriseOrange_main_1.png',
			'color'=> 'Orange',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// id 17 -> Xiaomi
		// Color Grey
		DB::table('product_images')->insert(
			[
			'product_id' => '17',
			'image' => 'Xiaomi_RedmiNote9Pro_InterstellarGrey_main_1.png',
			'color'=> 'Grey',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color White
		DB::table('product_images')->insert(
			[
			'product_id' => '17',
			'image' => 'Xiaomi_RedmiNote9Pro_GlacierWhite_main_1.png',
			'color'=> 'White',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// Color Green
		DB::table('product_images')->insert(
			[
			'product_id' => '17',
			'image' => 'Xiaomi_RedmiNote9Pro_TropicalGreen_thumbnail_1.png',
			'color'=> 'Green',
			'type'=> 'main',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);




    }
}
