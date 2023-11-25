<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weather;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Weather::factory(50)->create();
    }
}
