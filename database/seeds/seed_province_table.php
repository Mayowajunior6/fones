<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class seed_province_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
        	'name' => 'Manitoba',
        	'created_at'=>Carbon::Now()->addSeconds(10)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Alberta',
        	'created_at'=>Carbon::Now()->addSeconds(20)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Ontario',
        	'created_at'=>Carbon::Now()->addSeconds(30)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'British Columbia',
        	'created_at'=>Carbon::Now()->addSeconds(40)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Quebec',
        	'created_at'=>Carbon::Now()->addSeconds(50)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Nunavut',
        	'created_at'=>Carbon::Now()->addSeconds(60)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'New Brunswick',
        	'created_at'=>Carbon::Now()->addSeconds(70)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'New Foundland and Labrador',
        	'created_at'=>Carbon::Now()->addSeconds(80)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Prince Edward',
        	'created_at'=>Carbon::Now()->addSeconds(90)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Saskatchewan',
        	'created_at'=>Carbon::Now()->addSeconds(100)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'Yukon',
        	'created_at'=>Carbon::Now()->addSeconds(110)
        ]);
        DB::table('provinces')->insert([
        	'name' => 'North West Territories',
        	'created_at'=>Carbon::Now()->addSeconds(120)
        ]);
    }
}
