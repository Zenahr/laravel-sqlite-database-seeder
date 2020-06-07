<?php

use Illuminate\Database\Seeder;
use App\Weights;
use Carbon\Carbon;

class WeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker module.
        $faker = \Faker\Factory::create();

        // Remove all existing records.
        Weights::truncate();

        // Seed data.
        for ($i = 0; $i < 200; $i++) {
            Weights::create([
                'weight' => $faker->randomFloat(2, 65.21, 84.67),
                'timestamp' =>Carbon::now()->timestamp,
            ]);
        }
    }
}
