<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = Str::slug('Apple iPhone 6S - 128GB GSM Unlocked', '-');
        DB::table('products')->insert(

    	 	[
    	 		'name' => 'Apple iPhone 6S - 128GB GSM Unlocked',
                'slug' => $slug,
    	 		'is_available'=> 1,    	 		
    	 		'weight'=>'4.00',
    	 		'operatingSystem'=>'iOS',
    	 		'displaySize'=>'4.7 Inches',
    	 		'operatingSystem'=>'iOS',
                'dimensions'=>'140 x 72',
    	 		'camera'=>12,
    	 		'shortdescription'=>'1080p HD video recording; Retina Flash; ƒ/2.2 aperture; Wide color capture for photos and Live Photos, Auto HDR; Backside illumination sensor, Body and face detection; Auto image stabilization; Burst mode; Exposure control; Timer mode',
    	 		'longdescription'=>'The iPhone 6 and the iPhone 6 Plus take advantage of dual domain pixels, which improves viewing angles. AnandTech has given an in-depth overview of dual domain pixels, explaining that the technology alludes to the fact that the electrodes in the pixels are not all aligned. Instead, the pixels are "skewed when viewed from the perspective of the lines defined by the rectangular edges of the display," allowing them to compensate for uneven lighting',
    	 		'pixel'=>'Rear Camera has (4032×3024 pixels) and front camera has  (3264×2448)',
    	 		'memory'=>'128GB',
    	 		'created_at'=>Carbon::Now()->addSeconds(10)
    	 	]

    	 );

    }
				
}
