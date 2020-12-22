<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_category_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
    	// As per Colors
        DB::table('categories')->insert([
        	'name' => 'Black',
        	'type' => 'Color',
        	'description' => 'This phone is available in Black color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
        	'name' => 'Blue',
        	'type' => 'Color',
        	'description' => 'This phone is available in Blue color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
        	'name' => 'Red',
        	'type' => 'Color',
        	'description' => 'This phone is available in Red color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
        	'name' => 'White',
        	'type' => 'Color',
        	'description' => 'This phone is available in White color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
        	'name' => 'Silver',
        	'type' => 'Color',
        	'description' => 'This phone is available in Silver color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
        	'name' => 'Pink',
        	'type' => 'Color',
        	'description' => 'This phone is available in Pink color as well',
        	'active' => 1,
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('categories')->insert([
            'name' => 'Apple',
            'type' => 'Brand',
            'description' => 'The apple brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('categories')->insert([
            'name' => 'Samsung',
            'type' => 'Brand',
            'description' => 'The Samsung brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('categories')->insert([
            'name' => 'Xiaomi',
            'type' => 'Brand',
            'description' => 'The Xiaomi brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
            'name' => 'LG',
            'type' => 'Brand',
            'description' => 'The LG brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
            'name' => 'Huawei',
            'type' => 'Brand',
            'description' => 'The Huawei brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
            'name' => 'Motorola',
            'type' => 'Brand',
            'description' => 'The Motorola brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('categories')->insert([
            'name' => 'Google',
            'type' => 'Brand',
            'description' => 'The Google brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);   
        DB::table('categories')->insert([
            'name' => 'Other',
            'type' => 'Brand',
            'description' => 'The Alcatel brand phone',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('categories')->insert([
            'name' => 'Orange',
            'type' => 'Color',
            'description' => 'This phone is available in Oramge color as well',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
          DB::table('categories')->insert([
            'name' => 'Grey',
            'type' => 'Color',
            'description' => 'This phone is available in Grey color as well',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
           DB::table('categories')->insert([
            'name' => 'Green',
            'type' => 'Color',
            'description' => 'This phone is available in Green color as well',
            'active' => 1,
            'created_at'=>Carbon::Now()->addSeconds(10)
        ]);     
                
    }
}
