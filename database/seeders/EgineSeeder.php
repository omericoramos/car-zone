<?php

namespace Database\Seeders;

use App\Models\Engine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EgineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Engine::insert([
            ['id' => 1, 'literage' => '1.0'],
            ['id' => 2, 'literage' => '1.2'],
            ['id' => 3, 'literage' => '1.3'],
            ['id' => 4, 'literage' => '1.4'],
            ['id' => 5, 'literage' => '1.5'],
            ['id' => 6, 'literage' => '1.6'],
            ['id' => 7, 'literage' => '1.7'],
            ['id' => 8, 'literage' => '1.8'],
            ['id' => 9, 'literage' => '1.9'],
            ['id' => 10, 'literage' => '2.0 - 2.9'],
            ['id' => 11, 'literage' => '3.0 - 3.9'],
            ['id' => 12, 'literage' => '40 ou mais'],
        ]);
    }
}
