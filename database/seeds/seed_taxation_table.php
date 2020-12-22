<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class seed_taxation_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *      $table->foreignId('province_id');
            $table->float('gst',8,2);
            $table->float('pst',8,2);
            $table->float('hst',8,2);
            $table->string('country',255);  
            $table->timestamps();
     */
    public function run()
    {
        DB::table('taxations')->insert([
        	'province_id' => '1',
        	'gst' => '0.05',
        	'pst' => '0.07',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(20)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '2',
        	'gst' => '0.05',
        	'pst' => '0.00',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(40)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '3',
        	'gst' => '0.00',
        	'pst' => '0.00',
        	'hst' => '0.13',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(60)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '4',
        	'gst' => '0.05',
        	'pst' => '0.07',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(80)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '5',
        	'gst' => '0.05',
        	'pst' => '0.09',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(100)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '6',
        	'gst' => '0.05',
        	'pst' => '0.00',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(120)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '7',
        	'gst' => '0.00',
        	'pst' => '0.00',
        	'hst' => '0.15',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(140)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '8',
        	'gst' => '0.00',
        	'pst' => '0.00',
        	'hst' => '0.15',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(160)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '9',
        	'gst' => '0.00',
        	'pst' => '0.00',
        	'hst' => '0.15',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(180)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '10',
        	'gst' => '0.05',
        	'pst' => '0.06',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(200)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '11',
        	'gst' => '0.05',
        	'pst' => '0.00',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(220)
        ]);

        DB::table('taxations')->insert([
        	'province_id' => '12',
        	'gst' => '0.05',
        	'pst' => '0.00',
        	'hst' => '0.00',
        	'country' => 'Canada',
        	'created_at'=>Carbon::Now()->addSeconds(240)
        ]);
    }
}
