<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            "name" => "Indonesia",
        ]);

        Country::create([
            "name" => "Singapore",
        ]);

        Country::create([
            "name" => "Philippines",
        ]);

        Country::create([
            "name" => "Malaysia",
        ]);
    }
}
