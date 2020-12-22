<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_categories_table_pournima extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '1',
                'category_id' => '4',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

        DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '1',
                'category_id' => '13',  //google  	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

         DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '2',
                'category_id' => '1',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	   DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '2',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	  DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '3',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	   DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '3',
                'category_id' => '4',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	   DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '4',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	   DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '4',
                'category_id' => '1',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	     DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '5',
                'category_id' => '6',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	     DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '5',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '6',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '6',
                'category_id' => '1',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '7',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '7',
                'category_id' => '15',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	     DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '8',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '8',
                'category_id' => '4',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	     DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '9',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '9',
                'category_id' => '4',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );

    	     DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '10',
                'category_id' => '13',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    	    DB::table('product_categories')->insert(
    	 	[
    	 		'product_id' => '10',
                'category_id' => '5',    	 		   	 		
    	 		'created_at'=>Carbon::Now()->addSeconds(10)            
    	 	]
    	 );


    }
}
