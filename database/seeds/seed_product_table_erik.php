<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_product_table_erik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = Str::slug('Huawei P40 Pro', '-');
        DB::table('products')->insert(

    	 	[
    	 		'name' => 'Huawei P40 Pro',
                'slug' => $slug,
    	 		'is_available'=> 1,    	 		
    	 		'weight'=>'209.00',
    	 		'operatingSystem'=>'Android',
    	 		'displaySize'=>'6.58 Inches',
                'dimensions'=>'158.2mm x 72.6mm x 9mm',
    	 		'camera'=>4,
    	 		'shortdescription'=>'Speak for yourself with the Ultra Vision Leica Quad Camera by capturing photos and videos anytime and anywhere you want. Revolutionize your experience of speed and power with the cutting-edge Kirin 990 5G Chipset. The innovative design upgrades your visual entertainment and ergonomic comfort. Explore now and future with HUAWEI P40 Pro.',
    	 		'longdescription'=>'Inspired by the beauty and form of flowing water, the Quad-Curve Overflow Display1 is innovated to dissolve the barriers of vision and imagination on every edge. Plus with the 90 Hz refresh rate, you can enjoy an immersive view over the entire fluid screen. The mounting middle frame and protective round corners enhance the harmonious feel from your eyes to your hand. Reflecting the purity of nature, HUAWEI P40 Pro adopts the solid colours of Deep Sea Blue, Ice White, Black, Blush Gold and Silver Frost. The refractive matte finish accentuates an ethereal sense of depth that reveals elegance and inner peace in every shade.',
    	 		'pixel'=>'Rear-facing Cameras: 50 MP Ultra Vision + 40 MP Ultra Wide Cine + 12 MP Telephoto + 3D Depth Sensing Camera. Front-facing Camera: 32 MP + 3D Depth Sensing Camera',
    	 		'memory'=>'256GB',
                'unitprice'=>'750',
    	 		'created_at'=>Carbon::Now()->addSeconds(10)
    	 	]);

        $slug = Str::slug('Huawei Mate 40 RS', '-');
        DB::table('products')->insert(

            [
                'name' => 'Huawei Mate 40 RS',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'234.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.76 Inches',
                'dimensions'=>'162.9mm x 175.5mm x 10.1mm',
                'camera'=>5,
                'shortdescription'=>'See beyond the horizon, explore the unknown, and leap boldly into the future, with unprecedented power, speed and imagination. Embrace the intelligence and live an intimate life with innovative technology on the HUAWEI Mate 40 Pro.',
                'longdescription'=>'Brilliance in Your Grasp! The edge-to-edge 88° Horizon Display1 offers remarkable immersion, with on-screen content splashed across the surface, streaming colours, icons and text as if spilled from a waterfall. Rounded corners help keep your phone intact, and comfortable to touch. The 24-core Mali-G78 GPU delivers impressive image processing capabilities for a heightened gaming experience. With the sparkling 3D audio from the dual speakers, and the simulated vibrations from the linear motor — to immerse your mind, body and soul in every action. Packing more than 15 billion4 transistors, the extremely compact 5 nm Kirin 9000 5G SoC is capable of multi-tasking, processing massive amounts of data, and powering instantly-responsive AI computing with ease. Just lay back, and let it do the work.',
                'pixel'=>'Rear-facing Cameras: 50 MP Ultra Vision + 20 MP Ultra Wide Cine + 12 MP Telephoto + 8 MP SuperZoom Camera. Front-facing Camera: 13 MP + 3D Depth Sensing Camera',
                'memory'=>'512GB',
                'unitprice'=>'750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);
        $slug = Str::slug('LG Velvet', '-');
        DB::table('products')->insert(
            [
                'name' => 'LG Velvet',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'180.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.80 Inches',
                'dimensions'=>'167.2mm x 74.1mm x 7.9mm',
                'camera'=>3,
                'shortdescription'=>'Stylish. Sleek. Stunning. Set trends in style with unique colors that change in the light, refined water droplet-inspired cameras, and 3D arc edges. This device feels feather-light and fits comfortably in one hand.',
                'longdescription'=>'Key Features
                                    Sleek & Premium Design with Ergonomic 3D Arc Edges
                                    6.8” OLED FullVision™ Display
                                    Triple Rear Cameras: 48 MP, 8MP Ultra-Wide, 5MP Depth
                                    4K video records at 4x times the resolution of HD
                                    3D Sound Engine & Stereo Speakers
                                    Dust, Water, Shock Resistant
                                    All-Day Battery with Fast & Wireless Charge
                                    5G-Era Ready unreal speeds & robust connectivity',
                'pixel'=>'Rear-facing camera: 12 MP + 13 MP wide. Front-facing camera: 32 MP',
                'memory'=>'128GB',
                'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('LG G7 fit', '-');
            DB::table('products')->insert(
            [
                'name' => 'LG G7 fit',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'180.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.80 Inches',
                'dimensions'=>'167.2mm x 74.1mm x 7.9mm',
                'camera'=>3,
                'shortdescription'=>'Stylish. Sleek. Stunning. Set trends in style with unique colors that change in the light, refined water droplet-inspired cameras, and 3D arc edges. This device feels feather-light and fits comfortably in one hand.',
                'longdescription'=>'Key Features
                                    Sleek & Premium Design with Ergonomic 3D Arc Edges
                                    6.8” OLED FullVision™ Display
                                    Triple Rear Cameras: 48 MP, 8MP Ultra-Wide, 5MP Depth
                                    4K video records at 4x times the resolution of HD
                                    3D Sound Engine & Stereo Speakers
                                    Dust, Water, Shock Resistant
                                    All-Day Battery with Fast & Wireless Charge
                                    5G-Era Ready unreal speeds & robust connectivity',
                'pixel'=>'Rear-facing camera: 12 MP + 13 MP wide. Front-facing camera: 32 MP',
                'memory'=>'128GB',
                'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Redmi Note 9', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Redmi Note 9',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'209.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.67 Inches',
                'dimensions'=>'165.75mm x 76.68mm x 8.8mm',
                'camera'=>5,
                'shortdescription'=>'Xiaomi Redmi Note 9 Pro Global Version 6.67 inch 64MP Quad Camera 6GB 128GB 5020mAh NFC Snapdragon 720G Octa core 4G Smartphone - Tropical Green Other Area Version.',
                'longdescription'=>'Redmi Note 9 is equipped with a high-performance octa-core processor with a maximum clock speed of 2.0GHz, a GPU frequency of 1000MHz, for improved performance to provide you with a seamless gaming experience.
                    * Source: Canalys smartphone model level estimates Q4 2019
                    * This data was obtained from Xiaomi Laboratory. Actual results may vary slightly depending on the environment.
                    * 5020mAh refers to the typical value of Redmi Note 9 battery capacity.
                    * Charging speed data was obtained from Xiaomi Laboratories. Actual results may vary due to differences in charging cable, charging adapter, software version, environment, and model number.
                    * Battery standby time is tested by measuring the time of the smartphone reaching 0% power from 100% under a test scenario. Test results are collected from Xiaomi lab. Actual results may vary as a result of environmental changes.
                    * Clear phone calls even in noisy environments refers to simulated noisy environments in Xiaomi labs.
                    * FOV of the ultra wide-angle lens is 108° after distortion correction.
                    * When shooting buildings, landscapes or other places the intelligent scene recognition function prompts the user to activate ultra-wide angle mode. Ultra wide-angle mode must be activated manually.
                    * The term "Full Screen Display" indicates that the phone has a high screen-to-body ratio in comparison to traditional Xiaomi phones. The screen-to-body ratio was obtained from Xiaomi laboratory. The results may vary as methods of measurement may vary within the industry.
                    * The ordinary phones used for comparison are Redmi\'s own phones. Information on this product website comes from our lab data, design and technology parameters, and data provided by vendors. Actual circumstances may differ slightly depending on the test software version, the specific test environment, and the specific version. Images on this page are illustrations (including but not limited to images of the phone appearance, color and dimensions) and the design of the real product may differ
                    * Due to ongoing technology upgrades and production batch timings, some product specs may slightly differ.',
                'pixel'=>'Rear-facing cameras: 48 MP(wide), 8 MP(ultrawide), 2 MP(depth). Front-facing camera: 8MP.',
                'memory'=>'128GB',
                'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Redmi Note 9s', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Redmi Note 9s',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'209.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.67 Inches',
                'dimensions'=>'165.75mm x 76.68mm x 8.8mm',
                'camera'=>5,
                'shortdescription'=>'Xiaomi Redmi Note 9 Pro Global Version 6.67 inch 64MP Quad Camera 6GB 128GB 5020mAh NFC Snapdragon 720G Octa core 4G Smartphone - Tropical Green Other Area Version.',
                'longdescription'=>'* The data was obtained from the official website of Qualcomm® Snapdragon™.
                                    * This data was obtained from Xiaomi Laboratory. Actual results may vary slightly depending on the environment.
                                    * 5020mAh refers to the typical value of Redmi Note 9S\'s battery capacity.
                                    * Charging speed data was obtained from Xiaomi Laboratories. Actual results may vary due to differences in charging cable, charging adapter, software version, environment, and model number.
                                    * Battery standby time is tested by measuring the time of the smartphone reaching 0% power from 100% under a test scenario. Test results are collected from Xiaomi lab. Actual results may vary as a result of environmental changes.
                                    * FOV of the ultra wide-angle lens is 108° after distortion correction.
                                    * When shooting buildings, landscapes or other places the intelligent scene recognition function prompts the user to activate ultra-wide angle mode. Ultra wide-angle mode must be activated manually.
                                    * The term "Full Screen Display" indicates that the phone has a high screen-to-body ratio in comparison to traditional Xiaomi phones. The screen-to-body ratio of 91.8% was obtained from Xiaomi laboratory. The results may vary as methods of measurement may vary within the industry.
                                    * The ordinary phones used for comparison are Redmi\'s own phones. Information on this product website comes from our lab data, design and technology parameters, and data provided by vendors. Actual circumstances may differ slightly depending on the test software version, the specific test environment, and the specific version. Images on this page are illustrations (including but not limited to images of the phone appearance, color and dimensions) and the design of the real product may differ.',
                'pixel'=>'Rear-facing camera: 48 MP(wide), 8 MP(ultrawide), 5 MP, 2 MP(depth). Front-facing Camera: 16 MP (wide).',
                'memory'=>'128GB',
                'unitprice'=>'850',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Redmi Note 9 Pro', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Redmi Note 9 Pro',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'209.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.67 Inches',
                'dimensions'=>'165.75mm x 76.68mm x 8.8mm',
                'camera'=>5,
                'shortdescription'=>'High-quality hardware simply is not enough. MIUI combines users\' opinions with the Redmi Series high-performance smartphone to create the perfect experience.',
                'longdescription'=>'* Source: Canalys smartphone model level estimates Q4 2019
                                    * FOV of the ultra wide-angle lens is 108° after distortion correction. When shooting buildings, landscapes or other places the intelligent scene recognition function prompts the user to activate ultra-wide angle mode. Ultra wide-angle mode must be activated manually.
                                    * This data was obtained from Xiaomi Laboratory. Actual results may vary slightly depending on the environment.
                                    * Battery standby time is tested by measuring the time of the smartphone reaching 0% power from 100% under a test scenario. Test results are collected from Xiaomi lab. Actual results may vary as a result of environmental changes.
                                    * 5020mAh refers to the typical value of Redmi Note 9 Pro\'s battery capacity.
                                    * The ordinary phones used for comparison are Redmi\'s own phones. Information on this product website comes from our lab data, design and technology parameters, and data provided by vendors. Actual circumstances may differ slightly depending on the test software version, the specific test environment, and the specific version. Images on this page are illustrations (including but not limited to images of the phone appearance, color and dimensions) and the design of the real product may differ.',
                'pixel'=>'Rear-facing camera: 64 MP(wide), 8 MP(ultrawide), 2 MP(depth). Front-facing camera: 16 MP(wide).',
                'memory'=>'128GB',
                'unitprice'=>'1050',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Redmi 9C', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Redmi 9C',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'196.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.53 Inches',
                'dimensions'=>'164.9mm x 77.07mm x 9.0mm',
                'camera'=>4,
                'shortdescription'=>'Xiaomi Redmi 9C Global Version 6.53 inch 2GB 32GB 13MP Triple Camera 5000mAh MTK Helio G35 Octa core 4G Smartphone - Sunrise Orange Other Area Version',
                'longdescription'=>'MediaTek Helio G35
                                    CPU: 12 nm process technology, up to 2.3GHz, 8x A53, Octa-core CPU
                                    GPU: PowerVR8320, up to 680MHz
                                    2GB+32GB/3GB+64GB
                                    RAM: LPDDR4X
                                    ROM: eMMC 5.1
                                    6.53” HD+ Dot Drop display
                                    720x1600 HD+
                                    20:9 aspect ratio
                                    1500:1 contrast ratio
                                    NTSC 70% (typ)
                                    400 nit (typ) brightness
                                    Supports Color temperature adjustment | Standard mode | Reading mode
                                    Supports Sunlight mode',
                'pixel'=>'Rear-facing camera: 13 MP (wide), 2 MP (macro), 2 MP(depth). Front-facing camera: 5 MP(wide)',
                'memory'=>'32GB',
                'unitprice'=>'750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Mi 10 Lite', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Mi 10 Lite',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'199.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.53 Inches',
                'dimensions'=>'162.3mm x 77.2mm x 8.9mm',
                'camera'=>5,
                'shortdescription'=>'Xiaomi Redmi 10X 4G CN Version 6.53 inch 48MP Quad Camera 4GB 128GB 5020mAh Helio G85 Octa core 4G Smartphone',
                'longdescription'=>'* This data was obtained from Xiaomi Laboratory. Actual results may vary slightly depending on the environment.
                    * 4160mAh refers to the typical value of Mi 10 Lite battery capacity.
                    * Charging speed data was obtained from Xiaomi Laboratories. Actual results may vary due to differences in charging cable, charging adapter, software version, environment, and model number.
                    * Battery standby time is tested by measuring the time of the smartphone reaching 0% power from 100% under a test scenario. Test results are collected from Xiaomi lab. Actual results may vary as a result of environmental changes.
                    * Clear phone calls even in noisy environments refers to simulated noisy environments in Xiaomi labs.
                    * FOV of the ultra wide-angle lens is 108° after distortion correction.
                    * When shooting buildings, landscapes or other places the intelligent scene recognition function prompts the user to activate ultra-wide angle mode. Ultra wide-angle mode must be activated manually.
                    * The term "Full Screen Display" indicates that the phone has a high screen-to-body ratio in comparison to traditional Xiaomi phones. The screen-to-body ratio was obtained from Xiaomi laboratory. The results may vary as methods of measurement may vary within the industry.
                    * The ordinary phones used for comparison are Redmi\'s own phones. Information on this product website comes from our lab data, design and technology parameters, and data provided by vendors. Actual circumstances may differ slightly depending on the test software version, the specific test environment, and the specific version. Images on this page are illustrations (including but not limited to images of the phone appearance, color and dimensions) and the design of the real product may differ
                    * Due to ongoing technology upgrades and production batch timings, some product specs may slightly differ.',
                'pixel'=>'Rear-facing cameras: 48 MP (wide), 8 MP (ultrawide), 2 MP (macro), 2 MP (depth). Front-facing camera: 16 MP (wide)',
                'memory'=>'128GB',
                'unitprice'=>'700',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

            $slug = Str::slug('Xiaomi Mi 10T Pro 5G', '-');
            DB::table('products')->insert(
            [
                'name' => 'Xiaomi Mi 10T Pro 5G',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'216.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.67 Inches',
                'dimensions'=>'165.1mm x 76.4mm x 9.33mm',
                'camera'=>4,
                'shortdescription'=>'Xiaomi Mi 10T Global Version 64MP Triple Camera 6GB 128GB 144Hz Adaptive Sync 6.67 inch Display 5000mAh NFC Snapdragon 865 5G Smartphone',
                'longdescription'=>'*108MP main camera is only available on Mi 10T Pro. Mi 10T has 64MP main camera.
                    * Images on this page are illustrations and the design of the real product may differ.
                    *Maximum frame rate for each mobile game may vary. High refresh rate gaming support only available on games tested by Xiaomi. For other games, optimal refresh rate will be selected by AdaptiveSync technology.
                    *MEMC algorithms transform 24fps/25fps/30fps footage into 48fps/50fps/60fps videos
                    *5G requires the support of local telecom operator services, and may not be available in all regions
                    * 5000mAh refers to the typical value of Mi 10T Pro & Mi 10T\'s battery capacity.
                    *Includes n8, n20, n38 and n41 5G bands
                    *Under test conditions, more than 99.99% of Escherichia coli and Staphylococcus aureus were eliminated after 24 hours of exposure to the case, tested by TÜV SÜD PSB Products Testing (Shanghai) Co., Ltd. The test report number is 721657586-1C.
                    *All data on this page regarding charging and battery life are obtained from Xiaomi laboratories. Actual results may vary according to differences in software version, environment and phone edition and may not reflect the actual product.
                    *All comparisons made on this page to typical phones refer to typical Xiaomi phones; Unless otherwise indicated on this product page, all data come from Xiaomi Laboratories, design and technology parameters, and data provided by vendors.The testing data may vary slightly between different test versions and testing environments. All figures shown on this product page are for reference only and may not reflect the actual product.',
                'pixel'=>'Rear-facing cameras: 108 MP(wide), 13 MP (ultrawide), 5 MP (macro). Front-facing camera: 20 MP (wide)',
                'memory'=>'128GB',
                'unitprice'=>'850',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy S20 Fan', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy S20 Fan',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'194.70',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.50 Inches',
                'dimensions'=>'159.8mm x 74.5mm x 8.4 mm',
                'camera'=>2,
                'shortdescription'=>'This is the phone for people who want it all. We listened to you, the fans, and what we\'ve created is a phone that doesn\'t compromise. This is the phone tailor-made for fans of all kinds. So whether you\'re a fan of photography, gaming, or filling your feed with all that inspires you, we put together a stellar combination of S20 innovation. This is a phone that gives you what you want, to do more of what you love.',
                'longdescription'=>'2x optical zoom in, 2x optical zoom out
                                     digital zoom up to 10x
                                     Portrait Lighting with six effects
                                     2x optical zoom in, 2x optical zoom out
                                     digital zoom up to 10x
                                     Portrait Lighting with six effects
                                     2x optical zoom in, 2x optical zoom out 
                                     digital zoom up to 10x; Next-generation Smart HDR for photos',
                'pixel'=>'Rear-facing cameras: 12MP Ultra Wide Camera, 12MP Wide-angle Camera,  64MP Telephoto Camera. Front-facing camera: 10MP Selfie Camera.',
                'memory'=>'64GB',

                 'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy A21s', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy A21s',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'192.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.50 Inches',
                'dimensions'=>'161.6mm x 75.2mm x 8.3 mm',
                'camera'=>5,
                'shortdescription'=>'WLAN - Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                                    Bluetooth - 5.0, A2DP, LE
                                    GPS - Yes, with A-GPS, GLONASS, GALILEO, BDS
                                    NFC- Yes (market/region dependent)
                                    Radio - FM radio, RDS, recording
                                    USB: USB - Type-C 2.0
                                    Sensors -Fingerprint (rear-mounted), 
                                    accelerometer, gyro, proximity, compass',
                'longdescription'=>'Go ultra high-res on Galaxy A21s with 48MP Main Cam for crisp, clear photos day and night. A 123° 8MP Ultra Wide Cam captures more of the view. Choose the upgraded 2MP Macro Cam for highly refined close-ups, and make sure the subject always stands out with the 2MP Depth Camera’s multiple Live Focus effects.',
                'pixel'=>'Rear-facing cameras: 48 MP (wide), 8 MP (ultrawide), 2 MP  (macro), 2 MP(depth). Front-facing camera: 13 MP.',
                'memory'=>'128GB',
                'unitprice'=>'1050',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy S20 FE 5G', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy S20 FE 5G',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'190.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.50 Inches',
                'dimensions'=>'159.8mm x 74.5mm x 8.4 mm',
                'camera'=>4,
                'shortdescription'=>'WLAN - Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot
                                    Bluetooth - 5.0, A2DP, LE
                                    GPS- Yes, with A-GPS, GLONASS, BDS, GALILEO
                                    NFC-Yes
                                    Radio-FM radio
                                    USB-USB- Type-C 3.2, USB On-The-Go
                                    Sensors: Fingerprint (under display, optical), accelerometer, gyro, proximity, compass Bixby natural language commands and dictation',
                'longdescription'=>'Samsung Galaxy S20 FE 5G. Best with Bell.
With access to Canada’s best national network2, you can stream, download, browse and share at blazing-fast speeds from coast to coast.
Shoot 30x closer in up-close detail.
Your Galaxy S20 FE 5G combines revolutionary folded lens technology, a high-resolution image sensor, and AI-enhanced Super Resolution Zoom for a 30x zoom range. Capture details you otherwise might have missed.
Don’t let darkness deter your creativity.
When you switch to Bright Night mode, magic happens. The camera captures multiple photos at once on a larger image sensor. Then, AI multi-frame integration merges them into one clear, super-shareable and natural low-light image. No flash required.
Refresh. Repeat. 120 times a second.
With a 6.5” FHD+ Infinity-O Super AMOLED display and 120 Hz refresh rate, this Galaxy delivers a super-fast and super-smooth response. With edge-to-edge cinematic clarity and 5G capability, you’ll be totally immersed in your on-screen experience.',
                'pixel'=>'Rear-facing cameras: 12MP Ultra Wide Camera, 12MP Wide-angle Camera,  8MP Telephoto Camera. Front-facing camera: 32MP Selfie Camera',
                'memory'=>'128GB',
                 'unitprice'=>'960',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy Fold', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy Fold',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'263.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'7.30 Inches',
                'dimensions'=>'160.9mm x 117.9mm x 6.9 mm',
                'camera'=>5,
                'shortdescription'=>'WLAN-Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot
                                        Bluetooth 5.0, A2DP, LE, aptX HD
                                        GPS-Yes, with A-GPS, GLONASS, GALILEO, BDS
                                        NFC-Yes
                                        Radio-No
                                        USB-USB Type-C 3.1
                                        Sensors-Fingerprint (side-mounted), accelerometer, gyro, proximity, compass, barometer ANT+Bixby natural language commands and dictation
                                        Samsung DeX (desktop experience support)',
                'longdescription'=>'Ergonomic design makes your grip comfortable and unlocking easy.
Folded, Galaxy Fold is compact enough to hold and use with one hand, with an ergonomic, comfortable grip. The fingerprint scanner is placed along the side where your thumb or index finger naturally land, so unlocking is as intuitive as picking up your phone.

*The device contains magnets. Keep a safe distance between the device and objects that may be affected by magnets such as credit cards and implantable medical devices.1',
                'pixel'=>'Rear-facing cameras: 16MP Ultra Wide, 12MP Wide-angle Camera, 12MP Telephoto Camera. Front-facing cameras: 10MP Selfie Camera, 8MP RGB Depth Camera. ',
                'memory'=>'512GB',
                'unitprice'=>'1050',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

         $slug = Str::slug('Samsung Galaxy A42 5G', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy A42 5G',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'193.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.60 Inches',
                'dimensions'=>'164.4mm x 75.9mm x 8.6 mm',
                'camera'=>5,
                'shortdescription'=>'WLAN-Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                                    Bluetooth-5.0, A2DP, LE
                                    GPS-Yes, with A-GPS, GLONASS, GALILEO, BDS
                                    NFC-Yes
                                    Radio-Unspecified
                                    USB-USB Type-C 2.0
                                    Sensors: Fingerprint (under display, optical), accelerometer, gyro, proximity, compass',
                'longdescription'=>'Go faster with Galaxy A42 5G
On the next-generation mobile data network, the power of 5G fast speeds change the way you experience and share content—from super smooth gaming and streaming, to ultra fast sharing and downloading. Upgrade to the Galaxy A42 5G and speed up your smartphone experience.',
                'pixel'=>'Rear-facing cameras: 48 MP (wide), 8 MP (ultrawide), 2 MP  (macro), 2 MP(depth). Front-facing camera: 13 MP.',
                'memory'=>'128GB',
                'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy Note9', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy Note9',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'201.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.40 Inches',
                'dimensions'=>'161.9mm x 76.4mm x 8.8 mm',
                'camera'=>3,
                'shortdescription'=>'WLAN: Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                                    Bluetooth: 5.0, A2DP, LE, aptX
                                    GPS: Yes, with A-GPS, GLONASS, BDS, GALILEO
                                    NFC: Yes
                                    Radio: No
                                    USB        USB Type-C 3.1
                                    Sensors: Iris scanner, fingerprint (rear-mounted), accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2
                                     Samsung DeX (desktop experience support) ANT+ Bixby natural language commands and dictation',
                'longdescription'=>'The largest battery in a note, ever When you have a long lasting battery, you really can go all day and all night; Expandable memory up to 640GB
The Note9 has twice as much storage as the Note8, which means more music, more videos, more pictures, and less worry when it comes to space on your phone
The Note9 gives you a quick network connection for incredibly fast streaming and downloading, so you can do more, uninterrupted
Still amazing on screen, but now the S pen has more power off screen Remotely control different applications and use the S pen to capture shots from far away, scroll, and play music
At 6.4 Inches, the Note9 has the largest screen of any Galaxy phone Perfect for gaming and streaming, our super AMOLED display is bigger than ever before',
                'pixel'=>'Rear-facing cameras: Wide-angle 12MP, Telephoto 12MP. Front-facing camera: 8MP.',
                'memory'=>'512GB',
                 'unitprice'=>'850',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Samsung Galaxy S III', '-');
        DB::table('products')->insert(

            [
                'name' => 'Samsung Galaxy S III',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'133.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'4.80 Inches',
                'dimensions'=>'136.6mm x 70.6mm x 8.6 mm',
                'camera'=>3,
                'shortdescription'=>'WLAN: Wi-Fi 802.11 a/b/g/n, dual-band, Wi-Fi Direct, DLNA, hotspot
                                    Bluetooth: 4.0, A2DP, EDR, aptX
                                    GPS: Yes, with A-GPS, GLONASS
                                    NFC: Yes
                                    Radio: Stereo FM radio, RDS
                                    USB: microUSB 2.0 (MHL TV-out), USB On-The-Go
                                    Sensors: Accelerometer, gyro, proximity, compass, barometer S-Voice natural language commands and dictation',
                'longdescription'=>'2G Network GSM 850 / 900 / 1800 / 1900
                                    3G Network HSDPA 850 / 900 / 1900 / 2100
                                    4G Network Region Based
                                    This cell phone may not include a US warranty as some manufacturers do not honor warranties for international version phones. Please contact the seller for specific warranty information.',
                'pixel'=>'Rear-facing cameras: 8 MP. Front-facing camera: 1.9MP.',
                'memory'=>'16GB',
                'unitprice'=>'790',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Apple iPhone 8', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone 8',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'148.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'4.70 Inches',
                'dimensions'=>'136.6mm x 70.6mm x 8.6 mm',
                'camera'=>2,
                'shortdescription'=>'Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation',
                'longdescription'=>'1080p HD video recording; Retina Flash; ƒ/2.2 aperture; Wide color capture for photos and Live Photos; Auto HDR; Backside illumination sensor; Body and face detection; Auto image stabilization; Burst mode; Exposure control; Timer mode',
                'pixel'=>'Rear-facing cameras: 12MP. Front-facing camera: 7MP.',
                'memory'=>'64GB ROM 2GB RAM, 256GB ROM 2GB RAM',
                 'unitprice'=>'980',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Apple iPhone XR', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone XR',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'194.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'6.10 Inches',
                'dimensions'=>'150.9mm x 75.7mm x 8.3 mm',
                'camera'=>2,
                'shortdescription'=>'Comes With EarPods, Lightning Connector, Lightning to USB Cable, USB Power Adapter, and Documentation',
                'longdescription'=>'All-new Liquid Retina display — the most advanced LCD in the industry. Even faster Face ID. The smartest, most powerful chip in a smartphone. And a breakthrough camera system. iPhone XR. It’s beautiful any way you look at it.',
                'pixel'=>'Rear-facing cameras: 12MP. Front-facing camera: 7MP.',
                'memory'=>'128GB',
                 'unitprice'=>'950',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Apple iPhone 11', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone 11',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'194.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'6.10 Inches',
                'dimensions'=>'150.9mm x 75.7mm x 8.3mm',
                'camera'=>3,
                'shortdescription'=>"As part of Apple's effort to reach our environmental goals, iPhone 11 does not include a power adapter or EarPods. Included in the box is a USB‑C to Lightning cable that supports fast charging and is compatible with USB‑C power adapters and computer ports.",
                'longdescription'=>'Just the right amount of everything. New dual-camera system. All-day battery. The toughest glass in a smartphone, and Apple’s fastest chip ever. Face ID is the most secure facial authentication in a smartphone. It doesn’t store or share your photo. And it’s more secure than Touch ID.',
                'pixel'=>'Dual Rear-facing cameras. Front-facing camera: 12MP.',
                'memory'=>'256GB',
                'unitprice'=>'1550',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Apple iPhone 11 PRO', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone 11 PRO',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'188.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'6.50 Inches',
                'dimensions'=>'144.0mm x 71.4mm x 8.1mm',
                'camera'=>4,
                'shortdescription'=>"Comes With EarPods with Lightning Connector, Lightning to USB Cable, USB Power Adapter, and Documentation.",
                'longdescription'=>'The highest-quality video in smartphone! Shoot 4K video with extended dynamic range at 60 fps. Capture four times more scene. And edit with new tools like rotate, crop and filters. 
                    Lots more power.
                    Lots more battery life.
                    Get up to five more hours of battery life with iPhone 11 Pro Max and up to four with iPhone 11 Pro.³ Fast-charge with the included 18W adapter. And A13 ionic with Neural Engine — the fastest chip in a smartphone.',
                'pixel'=>'Triple Rear-facing cameras. Front-facing camera: 12MP.',
                'memory'=>'64GB',
                 'unitprice'=>'1550',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Apple iPhone 12', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone 12',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'164.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'6.10 Inches',
                'dimensions'=>'146.7mm x 71.5mm x 7.4mm',
                'camera'=>4,
                'shortdescription'=>"Made with better materials
                                    100% recycled tungsten in the Taptic Engine, representing 99% of the tungsten in the device
                                    100% recycled rare earth elements in all magnets, representing 98% of the rare earth elements in the device
                                    100% recycled tin in the solder of the main logic board
                                    35% or more recycled plastic in multiple components",
                'longdescription'=>'HDR display
                                    True Tone
                                    Wide color (P3)
                                    Haptic Touch
                                    2,000,000:1 contrast ratio (typical)
                                    625 nits max brightness (typical); 1200 nits max brightness (HDR)
                                    Fingerprint-resistant oleophobic coating
                                    Support for display of multiple languages and characters simultaneously',
                'pixel'=>'Dual Rear-facing cameras: 12MP Ultrawide and 12MP Wide-angle. Front-facing camera: 12MP.',
                'memory'=>'64GB',
                 'unitprice'=>'1600',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

                $slug = Str::slug('Apple iPhone 12 PRO', '-');
        DB::table('products')->insert(

            [
                'name' => 'Apple iPhone 12 PRO',
                'slug' => $slug,
                'is_available'=> 0,             
                'weight'=>'189.00',
                'operatingSystem'=>'iOS',
                'displaySize'=>'6.10 Inches',
                'dimensions'=>'146.7mm x 71.5mm x 7.4mm',
                'camera'=>4,
                'shortdescription'=>"Made with better materials
                                    100% recycled tungsten in the Taptic Engine, representing 99% of the tungsten in the device
                                    100% recycled rare earth elements in all magnets, representing 98% of the rare earth elements in the device
                                    100% recycled tin in the solder of the main logic board
                                    35% or more recycled plastic in multiple components",
                'longdescription'=>'Get infinitely spectacular possibilities with the iPhone 12 Pro. It features the powerful A14 Bionic chip, 5G to download and stream high-quality video, a bright 6.1" Super Retina XDR display, and Ceramic Shield for better drop performance. Other features include a LiDAR scanner, a triple-camera system with cinema-grade Dolby Vision, MagSafe accessories for wireless charging, and much more.',
                'pixel'=>'Triple Rear-facing cameras: 12MP Telephoto, 12MP Ultrawide and 12MP Wide-angle. Front-facing camera: 12MP.',
                'memory'=>'512GB',
                 'unitprice'=>'1800',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

         $slug = Str::slug('Huawei Nova 7', '-');
        DB::table('products')->insert(

            [
                'name' => 'Huawei Nova 7',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'180.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.53 Inches',
                'dimensions'=>'160.64mm x 74.33mm x 7.96mm',
                'camera'=>5,
                'shortdescription'=>"Snap wherever and however you like
Capture stunning images with the all-powerful 64 MP quad-camera, which is reinforced by the Kirin 985's next-level AI and image processing. Explore the boundless potential for creative expression — reproducing sweeping landscapes, distant landmarks, and close-up scenes with great details and super clarity, in their full glory.",
                'longdescription'=>'Fluid Aesthetics, Refined Craftsmanship. Floats on air, falls into your heart. Wafer-thin at 7.96 mm,2 and feather-light at around 180 grams2, the HUAWEI nova 7 is a crafted masterpiece that fits seamlessly in your palm. An iconic 3D CMF process produces a breathtaking colour show, bringing waves of shimmering splendour to the surface. 
                Keep more of what you love! 8 GB of RAM easily handles all of your multitasking needs, and 256 GB of ROM ensures that there is ample space for all of your favourite apps, images, HD videos and intensive games.',
                'pixel'=>'Rear-facing cameras: 64 MP + 8 MP (Ultra Wide Angle Lens) + 8 MP (Telephoto Lens) + 2 MP (Macro). Front-facing camera: 32MP.',
                'memory'=>'256GB',
                 'unitprice'=>'1900',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('Huawei Mate 30 Pro 5G', '-');
        DB::table('products')->insert(

            [
                'name' => 'Huawei Mate 30 Pro 5G',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'198.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.53 Inches',
                'dimensions'=>'158.1mm x 73.10mm x 8.8mm',
                'camera'=>5,
                'shortdescription'=>"Rethink Possibilities. The breakthrough of visual boundaries, the exploration of photography and videography, the liberation of power and speed, and the innovation of interaction are now ready to be discovered. Embrace the future with new possibilities.",
                'longdescription'=>'Expanding Horizons
                                    Expanding from edge to edge, the ultra-curved screen extends the horizon for an ultimate immersive viewing experience. The encircled glass with 88 degree1 ultra curves, gives you a natural touch and hold in the palm of your hand. More than a piece of artwork, it is pursuing the balance of aesthetic and comfort.
                                    The Magic of Side-Touch
                                    The ultra-curved screen edges offer a wider area for interactions which also replace the physical buttons for a seamless design. You can naturally adjust the volume or enjoy quad-finger game control with this innovative side-touch interaction.',
                'pixel'=>'Rear-facing cameras: 40 MP (Cine Camera) + 40 MP (SuperSensing Camera) + 8 MP (Telephoto) + 3D Depth Sensing Camera. Front-facing camera: 32MP.',
                'memory'=>'256GB',
                'unitprice'=>'750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);

        $slug = Str::slug('LG G8 ThinQ', '-');
        DB::table('products')->insert(

            [
                'name' => 'LG G8 ThinQ',
                'slug' => $slug,
                'is_available'=> 1,             
                'weight'=>'167.00',
                'operatingSystem'=>'Android',
                'displaySize'=>'6.1 Inches',
                'dimensions'=>'151.9mm x 71.8mm x 8.4 mm',
                'camera'=>3,
                'shortdescription'=>"It’s your chance to bring home the new LG G8 ThinQ™, with its truly immersive entertainment experience, unique and convenient Hand ID unlock, and touchless commands.",
                'longdescription'=>'It’s not just for taking photos. The Z Camera uses infrared lights to measure what’s in front, producing stronger biometric security, enabling a touch-free phone interface, and adding extraordinary depth and resolution to selfies. The LG G8 ThinQ™ is crafted with smooth, contoured glass for a gorgeous, uncompromising streamlined design. Featuring our edge-to-edge 6.1" OLED Fullvision™ display, the LG G8 ThinQ™ lets you enjoy striking clarity, beautiful contrast, and vibrant color for some of the best picture quality ever from LG.',
                'pixel'=>'Rear-facing cameras: 12 MP (standard), 16 MP (ultrawide). Front-facing camera: 8MP (wide).',
                'memory'=>'128GB',
                 'unitprice'=>'750',
                'created_at'=>Carbon::Now()->addSeconds(10)
            ]);
    }
				
}
