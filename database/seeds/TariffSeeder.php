<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariff')->insert([
            'nights' => 1,
            'price' => 85.00,
        ]);

        DB::table('tariff')->insert([
            'nights' => 2,
            'price' => 170.00,
        ]);

        DB::table('tariff')->insert([
            'nights' => 3,
            'price' => 220.00,
        ]);

        DB::table('tariff')->insert([
            'nights' => 4,
            'price' => 275.00,
        ]);

        DB::table('tariff')->insert([
            'nights' => 7,
            'price' => 450.00,
        ]);

        DB::table('tariff')->insert([
            'nights' => 14,
            'price' => 805.00,
        ]);
    }
}
