<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_categoies_table_shristi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Huwawei P40 id: 11
// 
    	DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

		DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

		

		DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

		DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '5',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);
		DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '11',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

		DB::table('product_categories')->insert(
		[
			'product_id' => '11',
			'category_id' => '6',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);
		// Huwawei Mate 40 RS id: 12
		DB::table('product_categories')->insert(
		[
			'product_id' => '12',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

		DB::table('product_categories')->insert(
		[
			'product_id' => '12',
			'category_id' => '11',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);
		DB::table('product_categories')->insert(
		[
			'product_id' => '12',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);



    	// Huwawei P40  id: 11
    	
  //       DB::table('product_categories')->insert(
		// [
		// 	'product_id' => '11',
		// 	'category_id' => '1',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// ]
		// );

		// DB::table('product_categories')->insert(
		// [
		// 	'product_id' => '11',
		// 	'category_id' => '2',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// ]
		// );

  //       DB::table('product_categories')->insert(
		// [
		// 	'product_id' => '11',
		// 	'category_id' => '6',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// ]
		// );

		// DB::table('product_categories')->insert(
		// [
		// 	'product_id' => '11',
		// 	'category_id' => '5',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// ]
		// );

		// DB::table('product_categories')->insert(
		// [
		// 	'product_id' => '11',
		// 	'category_id' => '4',
		// 	'created_at'=>Carbon::Now()->addSeconds(10)
		// ]
		// );


        // Huwawei Mate 30 Pro  id: 35
         
        DB::table('product_categories')->insert(
		[
			'product_id' => '35',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

		DB::table('product_categories')->insert(
		[
			'product_id' => '35',
			'category_id' => '11',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        // Huwawei Nova 7  id: 34
        
          DB::table('product_categories')->insert(
		[
			'product_id' => '34',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

           DB::table('product_categories')->insert(
		[
			'product_id' => '34',
			'category_id' => '11',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        // LG Velvet  id: 13
        
         DB::table('product_categories')->insert(
		[
			'product_id' => '13',
			'category_id' => '16',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

         DB::table('product_categories')->insert(
		[
			'product_id' => '13',
			'category_id' => '6',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);
         DB::table('product_categories')->insert(
		[
			'product_id' => '13',
			'category_id' => '10',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);



         // LG G7 fit  id: 14
         
        DB::table('product_categories')->insert(
		[
			'product_id' => '14',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

		DB::table('product_categories')->insert(
		[
			'product_id' => '14',
			'category_id' => '10',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

         // LG G8 ThinQ  id: 36
          
        DB::table('product_categories')->insert(
		  [
			'product_id' => '36',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		  ]
		  );
		 
		 DB::table('product_categories')->insert(
		  [
			'product_id' => '36',
			'category_id' => '10',
			'created_at'=>Carbon::Now()->addSeconds(10)
		  ]
		  );

        // Samsung Galaxy S20 Fan  id: 21
          
        DB::table('product_categories')->insert(
		[
			'product_id' => '21',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

	    DB::table('product_categories')->insert(
		[
			'product_id' => '21',
			'category_id' => '16',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        // Samsung Galaxy A21s  id: 22
         
        DB::table('product_categories')->insert(
		[
			'product_id' => '22',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        DB::table('product_categories')->insert(
		[
			'product_id' => '22',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        // Samsung Galaxy S20 FE 5G  id: 23
        
        DB::table('product_categories')->insert(
		[
			'product_id' => '23',
			'category_id' => '3',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

        DB::table('product_categories')->insert(
		[
			'product_id' => '23',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

        // Samsung Galaxy Fold  id: 24
        
        DB::table('product_categories')->insert(
		[
			'product_id' => '24',
			'category_id' => '6',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);

        DB::table('product_categories')->insert(
		[
			'product_id' => '24',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		);



		// Samsung Galaxy A42 5G id: 25
        
        DB::table('product_categories')->insert(
		[
			'product_id' => '25',
			'category_id' => '1',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

        DB::table('product_categories')->insert(
		[
			'product_id' => '25',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

		// Samsung Galaxy Note9 id: 26 
        
        DB::table('product_categories')->insert(
		[
			'product_id' => '26',
			'category_id' => '2',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

        DB::table('product_categories')->insert(
		[
			'product_id' => '26',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

         // Samsung Galaxy S III id: 27

        DB::table('product_categories')->insert(
		[
			'product_id' => '27',
			'category_id' => '4',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 

        DB::table('product_categories')->insert(
		[
			'product_id' => '27',
			'category_id' => '8',
			'created_at'=>Carbon::Now()->addSeconds(10)
		]
		); 


    }
}
