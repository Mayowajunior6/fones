<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class seed_users_address_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * $table->foreignId('user_id');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('postal',10);
            $table->string('city',45);
            $table->integer('province_id');
            $table->string('country',255);
            $table->tinyInteger('shippingAddress');
            $table->tinyInteger('billingAddress');



     1   	'name' => 'Manitoba',
       
      2  	'name' => 'Alberta',
        
       3 	'name' => 'Ontario',
      
      4  	'name' => 'British Columbia',
        
       5 	'name' => 'Quebec',
        
        6	'name' => 'Nunavut',
        
        7	'name' => 'New Brunswick',
      
      8  	'name' => 'New Foundland and Labrador',
        
       9 	'name' => 'Prince Edward',
       
       10 	'name' => 'Saskatchewan',
     
     11   	'name' => 'Yukon',
       
       12 	'name' => 'North West Territories',
     */
    public function run()
    {
         DB::table('user_addresses')->insert([
         	'user_id' => '1',
        	'address1' => '196 Redonda St',
        	'address2' => 'Winnipeg',
        	'postal' => 'R2C 5L1',
        	'city' => 'Winnipeg',
        	'province_id' => '1',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(60)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '2',
        	'address1' => '10021 155th Street',
        	'address2' => 'New West',
        	'postal' => 'T5P 2L4',
        	'city' => 'Edmonton',
        	'province_id' => '2',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(120)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '2',
        	'address1' => '16 Young St',
        	'address2' => 'Bracebridge',
        	'postal' => 'M5E 2A3',
        	'city' => 'Bracebridge',
        	'province_id' => '3',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(180)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '3',
        	'address1' => '6727 Oak Street',
        	'address2' => 'Vancouver',
        	'postal' => 'V6P 3Z5',
        	'city' => 'Vancouver',
        	'province_id' => '4',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(240)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '3',
        	'address1' => '1625 Lincoln Avenue',
        	'address2' => 'Montreal',
        	'postal' => 'H3H 2T7',
        	'city' => 'Montreal',
        	'province_id' => '5',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(300)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '4',
        	'address1' => '8031 Nunavut Lane',
        	'address2' => 'Vancouver',
        	'postal' => 'V69 3J5',
        	'city' => 'Vancouver',
        	'province_id' => '6',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(360)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '4',
        	'address1' => '230 Mapleton Rd',
        	'address2' => 'Moncton',
        	'postal' => 'E1C 0B5',
        	'city' => 'Moncton',
        	'province_id' => '7',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(420)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '5',
        	'address1' => '72 Grenfell Avenue',
        	'address2' => 'St. John\'s',
        	'postal' => 'A1C 3E2',
        	'city' => 'St. John\'s',
        	'province_id' => '8',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(480)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '5',
        	'address1' => '12 Young Street',
        	'address2' => 'Charlottetown',
        	'postal' => 'C1A 2R8',
        	'city' => 'Charlottetown',
        	'province_id' => '9',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(540)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '6',
        	'address1' => '110 25th Stt',
        	'address2' => 'West',
        	'postal' => 'S7L 0C1',
        	'city' => 'Saskatoon',
        	'province_id' => '10',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(600)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '6',
        	'address1' => '213 Range Rd',
        	'address2' => 'Whitehorse',
        	'postal' => 'Y1A 3E5',
        	'city' => 'Whitehorse',
        	'province_id' => '11',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(660)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '7',
        	'address1' => '213 Range Rd',
        	'address2' => 'Whitehorse',
        	'postal' => 'Y1A 3E5',
        	'city' => 'Whitehorse',
        	'province_id' => '12',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '0',
        	'created_at'=>Carbon::Now()->addSeconds(720)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '7',
        	'address1' => '5303 52 Street',
        	'address2' => 'Yellowknife',
        	'postal' => 'X1A 1V1',
        	'city' => 'Yellowknife',
        	'province_id' => '3',
        	'country' => 'Canada',
        	'shippingAddress' => '0',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(780)
        ]);
         DB::table('user_addresses')->insert([
         	'user_id' => '8',
        	'address1' => '460 Portage Avenue',
        	'address2' => 'Winnipeg',
        	'postal' => 'R3C 0E8',
        	'city' => 'Winnipeg',
        	'province_id' => '1',
        	'country' => 'Canada',
        	'shippingAddress' => '1',
        	'billingAddress' => '1',
        	'created_at'=>Carbon::Now()->addSeconds(840)
        ]);
    }
}
