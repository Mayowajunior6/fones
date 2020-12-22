<?php

use Illuminate\Database\Seeder;


class seed_carrier_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carriers')->insert([
            'name' => 'Bell',
            'logo' => 'bell.svg',
        ]);

        DB::table('carriers')->insert([
            'name' => 'Telus',
            'logo' => 'telus.svg',
        ]);

        DB::table('carriers')->insert([
            'name' => 'Rogers',
            'logo' => 'rogers.svg',
        ]);

        DB::table('carriers')->insert([
            'name' => 'Koodo',
            'logo' => 'koodo.svg',
        ]);

        DB::table('carriers')->insert([
            'name' => 'Fido',
            'logo' => 'fido.svg',
        ]);

        DB::table('carriers')->insert([
            'name' => 'Virgin',
            'logo' => 'virgin.svg',
        ]);

    }
}
