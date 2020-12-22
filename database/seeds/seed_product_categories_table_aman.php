<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_categories_table_aman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// product id 37 
		DB::table('product_categories')->insert(
			[
			'product_id' => '37',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		
		// product id 37 with 2 is for color blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '37',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 38 
		DB::table('product_categories')->insert(
			[
			'product_id' => '38',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 38 with color blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '38',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 39 
		DB::table('product_categories')->insert(
			[
			'product_id' => '39',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 39 with color blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '39',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// Product id 40
		DB::table('product_categories')->insert(
			[
			'product_id' => '40',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 40 with color black
		DB::table('product_categories')->insert(
			[
			'product_id' => '40',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// Product id 41
		DB::table('product_categories')->insert(
			[
			'product_id' => '41',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 41 with color black
		DB::table('product_categories')->insert(
			[
			'product_id' => '41',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 42
		DB::table('product_categories')->insert(
			[
			'product_id' => '42',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 42 with color Blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '42',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 43
		DB::table('product_categories')->insert(
			[
			'product_id' => '43',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 43 with color Black
		DB::table('product_categories')->insert(
			[
			'product_id' => '43',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 44
		DB::table('product_categories')->insert(
			[
			'product_id' => '44',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 44 with color Black
		DB::table('product_categories')->insert(
			[
			'product_id' => '44',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 44 with color Blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '44',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 45
		DB::table('product_categories')->insert(
			[
			'product_id' => '45',
			'category_id' => '12',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 45 with color White
		DB::table('product_categories')->insert(
			[
			'product_id' => '45',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 46
		DB::table('product_categories')->insert(
			[
			'product_id' => '46',
			'category_id' => '14',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 46 with color Black
		DB::table('product_categories')->insert(
			[
			'product_id' => '46',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 20
		DB::table('product_categories')->insert(
			[
			'product_id' => '20',
			'category_id' => '9',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 20 with color Black
		DB::table('product_categories')->insert(
			[
			'product_id' => '20',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 20 with color Blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '20',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 20 with color Silver
		DB::table('product_categories')->insert(
			[
			'product_id' => '20',
			'category_id' => '5',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 19
		DB::table('product_categories')->insert(
			[
			'product_id' => '19',
			'category_id' => '9',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 19 with color White
		DB::table('product_categories')->insert(
			[
			'product_id' => '19',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 19 with color Grey
		DB::table('product_categories')->insert(
			[
			'product_id' => '19',
			'category_id' => '16',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 19 with color Blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '19',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 18
		DB::table('product_categories')->insert(
			[
			'product_id' => '18',
			'category_id' => '9',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 18 with color Orange
		DB::table('product_categories')->insert(
			[
			'product_id' => '18',
			'category_id' => '15',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 18 with color Grey
		DB::table('product_categories')->insert(
			[
			'product_id' => '18',
			'category_id' => '16',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 18 with color Blue
		DB::table('product_categories')->insert(
			[
			'product_id' => '18',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 17
		DB::table('product_categories')->insert(
			[
			'product_id' => '17',
			'category_id' => '9',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);

		// product id 17 with color green
		DB::table('product_categories')->insert(
			[
			'product_id' => '17',
			'category_id' => '17',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 17 with color Grey
		DB::table('product_categories')->insert(
			[
			'product_id' => '17',
			'category_id' => '16',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);
		// product id 17 with color White
		DB::table('product_categories')->insert(
			[
			'product_id' => '17',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
			]
		);



    }
}
