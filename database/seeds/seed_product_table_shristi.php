<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_table_shristi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = Str::slug('Google Pixel', '-');
        DB::table('products')->insert(

    	 	[
    	 		'name' => 'Google Pixel',
                'slug' => $slug,
    	 		'is_available'=> 0,    	 		
    	 		'weight'=>'141',
    	 		'operatingSystem'=>'Android',
    	 		'displaySize'=>'5.9 Inches',
                'dimensions'=>'143.8 x 69.5 x 8.5 mm',
    	 		'camera'=>2,
    	 		'shortdescription'=>'Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most.',
    	 		'longdescription'=>'Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
    	 		'pixel'=>'12.3 MP, f/2.0, 1/2.3", 1.55µm, PDAF, Laser AF',
    	 		'memory'=>'64GB',
                 'unitprice'=>'1050',
    	 		'created_at'=>Carbon::Now()->addSeconds(10)
    	 	]

    	 );


        $slug = Str::slug('Google Pixel 2', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 2',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'193',
                'operatingSystem'=>'Android',
                'displaySize'=>'5.9 Inches',
                'dimensions'=>'145.7 x 69.7 x 7.8 mm',
                'camera'=>2,
                'shortdescription'=>'With Duo screen share in HD, you canread articles, watch live sports and laugh together as if you were sitting in the same room. Its the brilliant Pixel camera, now with an ultrawide lens, and new features that help you to shoot and edit like the pros.',
                'longdescription'=>'Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'12.2 MP, f/1.8, 27mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, Laser AF, OIS',
                'memory'=>'64GB',
                'unitprice'=>'1550',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 2 XL', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 2 XL',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'193',
                'operatingSystem'=>'Android',
                'displaySize'=>'5.9 Inches',
                'dimensions'=>'145.7 x 69.7 x 7.8 mm',
                'camera'=>2,
                'shortdescription'=>'With Duo screen share in HD, you canread articles, watch live sports and laugh together as if you were sitting in the same room. Its the brilliant Pixel camera, now with an ultrawide lens, and new features that help you to shoot and edit like the pros.',
                'longdescription'=>'Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'12.2 MP, f/1.8, 27mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, Laser AF, OIS',
                'memory'=>'64GB',
                 'unitprice'=>'2000',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );



        $slug = Str::slug('Google Pixel 3a', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 3a',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'190',
                'operatingSystem'=>'Android',
                'displaySize'=>'5.7 Inches',
                'dimensions'=>'157.9 x 76.7 x 7.9 mm',
                'camera'=>2,
                'shortdescription'=>'HDR+ automatically enhances colour and lighting so that the photos you take stay as vivid as you remember. If shadows get in the way of a great portrait, Pixel drops in extra light to illuminate your subjects. You can also adjust the lighting later on in Google Photos.',
                'longdescription'=>'Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most.',
                'pixel'=>'12.2 MP, f/1.8, 27mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, Laser AF, OIS',
                'memory'=>'128GB',
                 'unitprice'=>'1900',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 3', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 3',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'198',
                'operatingSystem'=>'Android',
                'displaySize'=>'5.9 Inches',
                'dimensions'=>'145.6 x 68.2 x 7.9 mm',
                'camera'=>2,
                'shortdescription'=>'With Duo screen share in HD, you canread articles, watch live sports and laugh together as if you were sitting in the same room. Its the brilliant Pixel camera, now with an ultrawide lens, and new features that help you to shoot and edit like the pros.',
                'longdescription'=>'With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'12.2 MP, f/1.8, 27mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, Laser AF, OIS',
                'memory'=>'128GB',
                 'unitprice'=>'2010',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 3 XL', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 3 XL',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'213',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.2 Inches',
                'dimensions'=>'158 x 76.7 x 7.9 mm',
                'camera'=>3,
                'shortdescription'=>'HDR+ automatically enhances colour and lighting so that the photos you take stay as vivid as you remember. If shadows get in the way of a great portrait, Pixel drops in extra light to illuminate your subjects. You can also adjust the lighting later on in Google Photos.',
                'longdescription'=>'Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'13.2 MP, f/1.8, 28mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
                'memory'=>'256GB',
                'unitprice'=>'1750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 4', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 4',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'209',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.0 Inches',
                'dimensions'=>'147.1 x 68.8 x 8.2 mm',
                'camera'=>3,
                'shortdescription'=>'Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most.',
                'longdescription'=>'Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'13.2 MP, f/1.8, 28mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
                'memory'=>'256GB',
                'unitprice'=>'2050',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );



        $slug = Str::slug('Google Pixel 4 XL', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 4 XL',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'216',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.7 Inches',
                'dimensions'=>'160.4 x 68.8 x 8.2 mm',
                'camera'=>3,
                'shortdescription'=>'Give your videos a cinematic look with super-smooth panning thats inspired by the equipment used in Hollywood films. Extreme Battery Saver helps to take your all-day battery up to 48 hours on a single charge when you really need it.',
                'longdescription'=>'With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'13.2 MP, f/1.8, 28mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
                'memory'=>'256GB',
                'unitprice'=>'1750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 4a', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 4a',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'198',
                'operatingSystem'=>'Android',
                'displaySize'=>'5.8 Inches',
                'dimensions'=>'144 x 69.4 x 8.2 mm',
                'camera'=>3,
                'shortdescription'=>'With Duo screen share in HD, you canread articles, watch live sports and laugh together as if you were sitting in the same room. Its the brilliant Pixel camera, now with an ultrawide lens, and new features that help you to shoot and edit like the pros.',
                'longdescription'=>'Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy.',
                'pixel'=>'13.2 MP, f/1.8, 28mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
                'memory'=>'256GB',
                'unitprice'=>'1750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );


        $slug = Str::slug('Google Pixel 5', '-');
        DB::table('products')->insert(

            [
                'name' => 'Google Pixel 5',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'206',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.1 Inches',
                'dimensions'=>'144.7 x 70.4 x 8.0 mm',
                'camera'=>3,
                'shortdescription'=>'Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most.',
                'longdescription'=>'Titan™ M, our superhero-level security chip, and automatic updates4 help to keep your digital life secure, so you can rest easy. With Google Assistant, you can get help on the go, find answers when you need them, and even see whos calling and why before you answer the phone. Have a photoshoot day or night, capture moments with stunning clarity and take clips with Hollywood-inspired effects. Watch your go-to TV programmes, and enjoy the content that you love in crystal-clear HD. Power up quickly, stay charged all day, and turn on Extreme Battery Saver to get up to 48 hours of battery when you need it most. ',
                'pixel'=>'13.2 MP, f/1.8, 28mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
                'memory'=>'256GB',
                'unitprice'=>'1550',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]

         );




    }
				
}
