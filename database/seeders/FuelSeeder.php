<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fuel::insert([
            ['id' => 1, 'name' => 'Flex'],
            ['id' => 2, 'name' => 'Galosina'],
            ['id' => 3, 'name' => 'Diesel'],
            ['id' => 4, 'name' => 'Alcool'],
        ]);
    }
}
