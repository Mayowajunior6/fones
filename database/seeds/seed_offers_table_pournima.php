<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_offers_table_pournima extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//product Id 1
        DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '1',
        	'points' => '1000',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '2',
        	'points' => '2000',
        	'created_at'=>Carbon::Now()->addSeconds(20)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '3',
        	'points' => '1050',
        	'created_at'=>Carbon::Now()->addSeconds(30)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '4',
        	'points' => '500',
        	'created_at'=>Carbon::Now()->addSeconds(40)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '5',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(50)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '6',
        	'points' => '2000',
        	'created_at'=>Carbon::Now()->addSeconds(60)
        ]);
       //product 1 _id end
       

       //product Id 2
        DB::table('offers')->insert([
			'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '7',
        	'points' => '1090',
        	'created_at'=>Carbon::Now()->addSeconds(70)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Zero Upfront plan with TELUS Easy Payment®',
        	'carrier_id' => '1',        	
        	'product_id' => '8',
        	'points' => '3000',
        	'created_at'=>Carbon::Now()->addSeconds(80)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '9',
        	'points' => '1750',
        	'created_at'=>Carbon::Now()->addSeconds(90)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '10',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '11',
        	'points' => '2150',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '12',
        	'points' => '2300',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 2 _id end
       

       //product Id 3
        DB::table('offers')->insert([
			'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '13',
        	'points' => '1600',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '14',
        	'points' => '900',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '15',
        	'points' => '1050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '16',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '17',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '18',
        	'points' => '2500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 3 _id end
       

       //product Id 4
        DB::table('offers')->insert([
			'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '19',
        	'points' => '1600',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '20',
        	'points' => '900',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '21',
        	'points' => '1050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '22',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '23',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '24',
        	'points' => '2500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 4 _id end
       //
       

       //product Id 5
        DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '25',
        	'points' => '1600',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '26',
        	'points' => '900',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '27',
        	'points' => '1050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '28',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '29',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '30',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 5 _id end
       

        //product Id 6
        DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '31',
        	'points' => '1600',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '32',
        	'points' => '900',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '33',
        	'points' => '1050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '34',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '35',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '36',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 6 _id end
       //
       

       //product Id 7
        DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '37',
        	'points' => '1800',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '38',
        	'points' => '1900',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '39',
        	'points' => '2050',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '40',
        	'points' => '2500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

          DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Fido Payment Program',
        	'carrier_id' => '1',        	
        	'product_id' => '41',
        	'points' => '2000',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

           DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Virgin Mobile Sweet PayTM',
        	'carrier_id' => '1',        	
        	'product_id' => '42',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       //product 7 _id end
       
       
       //product Id 8
        DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '43',
        	'points' => '1500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'A new 2-year plan promotion',
        	'carrier_id' => '1',        	
        	'product_id' => '44',
        	'points' => '1700',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year plan with Rogers Financing',
        	'carrier_id' => '1',        	
        	'product_id' => '45',
        	'points' => '2000',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);

         DB::table('offers')->insert([
        	'description' => 'on a new 2-year Tab Plus plan',
        	'carrier_id' => '1',        	
        	'product_id' => '46',
        	'points' => '2500',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
       
    }
}
