<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_table_andrew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Motorola - Moto E';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(

            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '197',
                'operatingSystem' => 'Android',
                'displaySize' => '6.2 in',
                'dimensions' => '7.6 (W) x 15.98 (H) x 0.89 (D) cm',
                'camera' => 3,
                'shortdescription' => 'From connecting with your family and friends to capturing incredible pictures, the Motorola Moto E for Chatr lets you do more of what you love. Powered by a Qualcomm Snapdragon 632 processor and 2GB of RAM, this device lets you enjoy responsive multitasking. With an ultra-wide Max Vision display, your e-books, movies, and games look realistic with precise image details.',
                'longdescription' => 'High-definition display:<br/>
                6.2-inch Max Vision display with IPS technology provides an ultra-wide view, ideal for watching movies and playing games. 1520 x 720 resolution makes your movies, games, and photos look realistic with crystal-clear imagery<br/>
                Massive storage space:<br/>
                32GB of onboard storage offers plenty of space for your apps, photos, videos, and documents. Expandable memory up to 512GB lets you amplify the storage for large-sized files, movies, games, and more.<br/>
                Reliable processing:<br/>
                1.8GHz octa-core Qualcomm Snapdragon 632 processor and 2GB of RAM help you perform multiple tasks seamlessly without any lag.  Android 10 operating system featuring an intuitive UI makes it easy to operate and handle day-to-day tasks efficiently.<br/>
                Capture lifelike moments:<br/>
                13MP rear camera with 60/30fps video resolution lets you record amazing videos and images. 5MP front-facing camera allows you to click perfect selfies and record videos at 30fps resolution<br/>
                Optimum privacy and long-lasting battery:<br/>
                Convenient rear fingerprint sensor lets you unlock the device quickly without entering a password to prevent unauthorised access. 3,550mAh lithium-polymer battery offers up to 29 hours of talk time to keep you going with regular activities<br/>
                Wide connectivity and water resistance:<br/>
                Wi-Fi (802.11a /b/g/n) connectivity provides reliable wireless network access via routers or portable hotspots. Bluetooth 4.2 LE technology lets you pair the smartphone with compatible devices such as wireless headphones, speakers, and more.  Micro-USB 2.0 port offers seamless connectivity to desktops and laptops for quick data transfers.  Advanced water protection technology means this smartphone can withstand splashes and spills.',
                'pixel' => 'Rear Camera has (4032×3024 pixels) and front camera has  (3264×2448)',
                'memory' => '32GB',
                'unitprice'=>'1200',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Moto G8 Power';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(

            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '188',
                'operatingSystem' => 'Android',
                'displaySize' => '6.4 in',
                'dimensions' => '161.3 x 75.8 x 9 mm',
                'camera' => 5,
                'shortdescription' => 'The Moto G8 Power mobile features a 6.4" display with a screen resolution of 1080 x 2300 pixels and runs on Android V10. 0 operating system. The device is powered by Octa-core (4x2.0 GHz Kryo 260 Gold & 4x1.8 GHz Kryo 260 Silver) processor paired with 4 GB of RAM. As far as the battery is concerned it has 5000 mAh. Other sensors include Fingerprint (rear-mounted), accelerometer, gyro, proximity.',
                'longdescription' => 'Moto G8 (stylized by Motorola as moto g8) is a series of Android smartphones developed by Motorola Mobility, a subsidiary of Lenovo. It is the eighth generation of the Moto G family. The G8 Play and G8 Plus were first released in October 2019, only 8 months after the previous generation. Other variants were released in March and April 2020. 
                The G8 Plus and Play were announced in October 2019 and released in October and November 2019 in Europe and Latin America; an international version was also released. The G8 Power was announced in February 2020, followed by the G8 in March 2020. The G8 and G8 Power were released in Europe and Latin America in March and April 2020. The G8 Power Lite was announced and released in April 2020 for Europe and Latin America. ',
                'pixel' => '16 MP (wide) with 8 MP (ultrawide) dedicated video camera and 2 MP macro + Front Camera 8 MP',
                'memory' => '64GB',
                'unitprice'=>'1100',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Moto G6';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(

            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '167',
                'operatingSystem' => 'Android',
                'displaySize' => '5.7 in',
                'dimensions' => '153.8 x 72.3 x 8.3 mm',
                'camera' => 3,
                'shortdescription' => 'The Motorola Moto G6\'s screen size is 5.7 inches with 1080 x 2160 pixels resolution. There is a Qualcomm SDM450 Snapdragon 450 Octa core 1.8 GHz processor (CPU). The phone runs on the Android 8.0 Oreo (Update Available: 9.0 Pie) operating system (OS).',
                'longdescription' => 'Brand New Factory Unlocked for most carriers worldwide. The phone comes untouched in the original retail box with all original accessories.2G - GSM 850/900/1800/1900 MHz3G - WCDMA 850/900/1900/2100 MHz4G - LTE B1(2100), B3(1800), B5(850), B7(2600), B28(700)Dual SIM Standby. NanoSIMScreen Size: 5.7" Full HD+ (2160x1080) 424ppiQualcomm® Snapdragon™ 450 processor, 1.8 GHz Octa-Core Adreno 506Operating System: Android Oreo 8.0Dual Main Camera: Dual Camera 12MP+5MPFront Camera: 5 MPMemory: 32GB ROM, 3GB RAM, supports up to 128GB microSD CardBattery: 3000 mAhNFC: No',
                'pixel' => 'Rear Camera Resolution 12 MP + Front Video Capture Resolution 5MP',
                'memory' => '128GB',
                'unitprice'=>'1150',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Moto G7';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(

            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '172',
                'operatingSystem' => 'Android',
                'displaySize' => '6.2 in',
                'dimensions' => '157 x 75.3 x 8 mm',
                'camera' => 3,
                'shortdescription' => 'The Motorola Moto G7 has a slick contemporary design, a dewdrop notch display, decent dual rear cameras, turbo charging, solid battery life and a near-stock version of Android 9 Pie making it worth every penny.',
                'longdescription' => 'Brand New Factory Unlocked for any GSM carrier worldwide. Phone comes untouched in original retail box with all original accessories. Capture creative portraits and outdoor scenes with depth effects on a 12 MP dual camera system. Search what you see with Google Lens. Plus, enjoy an ultrawide 6.2" Max Vision Full HD+ display.<br>
                striking portraits. stunning low-light shots:<br>
                Capture artistic depth effects with a 12 MP dual camera system, big 1.25um pixels, a large f/1.8 aperture, and creative photo software. Plus, take better low-light selfies with an 8 MP front camera and a new screen flash.<br>
                water-repellent, inside and out:<br>A water-repellent design protects against accidental spills, sweat, and light rain.<br>
                50% faster performance:<br>
                Feel a boost in performance in everything you do, from editing videos, to playing 3D games. With a responsive Qualcomm Snapdragon 632 octa-core processor, moto g7 is 50% faster than the previous generation.<br>
                stunning re-engineered Max Vision display:<br>
                Enjoy maximum big screen entertainment on a 6.2" Full HD+ display-our largest ever on a moto g. The 19:9 aspect ratio and new minimalist U design create an ultrawide, immersive viewing experience for movies, games, photos, and more.',
                'pixel' => 'dual rear cameras (a 12-megapixel main camera and a 5-megapixel depth camera) + front camera 8MP',
                'memory' => '64GB',
                'unitprice'=>'1250',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Moto Z XT1650';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(

            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '165',
                'operatingSystem' => 'Android',
                'displaySize' => '5.5 in',
                'dimensions' => '7.53 (W) x 15.33 (H) x 0.52 (D) cm',
                'camera' => 2,
                'shortdescription' => 'Factory Unlocked Motorola Moto Z XT1650 5.5" Unlocked Smart Phone, 32 GB, Black (01074NACRTL) with Canadian Warranty',
                'longdescription' => 'Good Android phone with 1.8Ghz Quad-Core processor provides good performance and great system execution of the Motorola Moto Z (XT1650-03 64GB). ... Including the battery, the Motorola Moto Z (XT1650-03 64GB) phone has 136 grams and it\'s a very thin device, only 5.2mm',
                'pixel' => 'Front-Facing Camera Resolution 5MP + Rear Camera Resolution 13MP',
                'memory' => '128GB',
                'unitprice'=>'1550',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - One Fusion';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(
            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '202',
                'operatingSystem' => 'Android',
                'displaySize' => '6.5 in',
                'dimensions' => '164.96 x 75.85 x 9.40mm',
                'camera' => 4,
                'shortdescription' => 'Motorola One Fusion 128GB Internal Storage, 4GB RAM, 48MP Camera, Qualcomm Snapdragon 710 LTE (Ocean Blue)',
                'longdescription' => 'HD+ 6.5 inches 720 x 1600 pixels, 20:9 ratio (~270 ppi density) - Non-removable Li-Po 5000 mAh battery - Android 10 with easy access to the Google apps you use most - Fingerprint (rear-mounted)<br/>
                128GB + 4GB RAM - microSDXC up to 512 GB (uses shared SIM slot) - Qualcomm snapdragon 710 Mobile platform - Wi-Fi 802.11 a/b/g/n/ac<br/>
                Rear Camera: 48 MP, f/1.7, (wide) + 8 MP, f/2.2 (ultrawide) +5 MP, f/2.2, (macro) + 2MP - Front Camera: 8 MP, f/2.0 - Video: 4K@30fps, 1080p@30fps<br/>
                Factory Unlocked cellphones are compatible with the GSM carriers but please be aware that they are not compatible with CDMA carriers.',
                'pixel' => 'primary camera uses a 64MP + ultrawide camera uses an 8MP + macro camera uses 5MP + depth camera has 2MP',
                'memory' => '4GB',
                'unitprice'=>'1050',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Razr';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(
            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '205',
                'operatingSystem' => 'Android',
                'displaySize' => '6.2 in foldable',
                'dimensions' => '72 x 172 x 6.9mm',
                'camera' => 2,
                'shortdescription' => 'With its compact design, razr fits comfortably in your palm or pocket. Use the Quick View display without opening the phone, or flip open to reveal a revolutionary smartphone with a full-length touch screen. Crafted with exceptional materials and packed with advanced features, the new razr is unlike anything you’ve ever seen.',
                'longdescription' => 'razr uses advanced OLED screen technology and groundbreaking flexible material that folds completely in half. The inner 6.2” Flex View display brings films and video to life in high-definition.
                Capture amazing photos with the 16 MP main camera. Night Vision mode brings light and clarity to the darkest scenes, and the camera’s artificial intelligence looks for ways to give you the best photos possible.
                Moto Experiences make it easier and faster to use your smartphone. Moto Display gives you a quick preview of notifications and updates and Moto Actions lets you use simple gestures to make everyday interactions more convenient.',
                'pixel' => 'Front Camera 5 MP + Rear Camera 16 MP',
                'memory' => '128GB',
                'unitprice'=>'1000',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - One Hyper';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(
            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '200',
                'operatingSystem' => 'Android',
                'displaySize' => '6.5 in',
                'dimensions' => '161.8 x 76.6 x 8.9mm',
                'camera' => 3,
                'shortdescription' => 'Experience the Motorola One Hyper on capture ultra-high resolution photos and 4K videos with a 64MP main camera and a 32MP selfie cam. Enjoy an ultra-wide lens, laser autofocus and built-in night vision.',
                'longdescription' => '6.5” Full HD+ Total Vision display:<br/>
                Experience edge-to-edge entertainment at its best with a 90% body-to-screen ratio and ultra-narrow bezels.<br/>
                4,000mAh battery that lasts for up to 38 hours:<br/>
                Stay connected all day long on the motorola one hyper, and still have plenty of battery life left for tomorrow. The 4,000mAh battery gives you up to 38 hours of use on a single charge.<br/>
                Powerful octa-core processor with 128GB of internal storage:<br/>
                Run multiple apps at once and experience games at their best on the Qualcomm® Snapdragon™ 675 processor. Plus, add a microSD card and enjoy up to 1TB of storage.',
                'pixel' => 'Front Camer 32MP + Rear Camera 64MP, 8MP',
                'memory' => '128GB',
                'unitprice'=>'1000',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Motorola - Moto G Fast';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(
            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '189.4',
                'operatingSystem' => 'Android',
                'displaySize' => '6.4 in',
                'dimensions' => '161.87 x 75.7 x 9.05 mm',
                'camera' => 4,
                'shortdescription' => 'Experience the moto g fast on instant response to every tap, touch, and swipe with the Qualcomm Snapdragon 665 and 3GB RAM.',
                'longdescription' => '16MP triple camera system:<br/>
                Capture the perfect shot in any situation with a Macro Vision camera for detailed closeups and an ultra-wide lens that fits 4x more in the frame.<br/>
                2 day battery:<br/>
                Get plenty of power for today and tomorrow with a 4000 mAh battery.<br/>
                6.4” Max Vision HD+ display:<br/>
                Bring your favourite photos, movies, shows, and games to life on an ultra-wide display.<br/>',
                'pixel' => 'Front Camera 8 MP + Rear Camera 16MP main sensor Macro Vision, 2MP minimum 2cm focus distance, 8MP 118° ultra-wide angle',
                'memory' => '32GB',
                'unitprice'=>'1150',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );

        $name = 'Alcatel - Go FLIP 3';
        $slug = Str::slug($name, '-');
        DB::table('products')->insert(
            [
                'name' => $name,
                'slug' => $slug,
                'is_available' => 1,
                'weight' => '118',
                'operatingSystem' => 'Other',
                'displaySize' => '6.4 in',
                'dimensions' => '105 x 53 x 18.99mm',
                'camera' => 1,
                'shortdescription' => 'The 2.8” internal display has an easy-to-use intuitive interface and the keypad is designed with large buttons for quick dialing and menu navigation. See who’s calling without opening the phone thanks to the 1.44” external preview display.',
                'longdescription' => 'As part of the KaiOS experience, the GO FLIP 3 comes preloaded with the Google Assistant, which helps you get things done and find answers on the go, using just your voice. It’s your own personal Google, always ready to help. At Alcatel we believe in making mobile products that are accessible for all. That’s why the GO FLIP 3 comes with a host of accessibility features like Real-Time-Text (RTT) and hearing aid compatibility that enables any user to easily stay connected. Be productive at work and home thanks to KaiOS, a quad-core processor, 4G LTE speeds, and an expandable memory slot that supports up to a 32GB microSD card. Plus, looking for a charger won’t be part of your daily worries thanks to the long-lasting battery.',
                'pixel' => 'Rear Camera 2MP',
                'memory' => '4GB',
                'unitprice'=>'1550',
                'created_at' => Carbon::Now()->addSeconds(10)
            ]
        );
    }
}
