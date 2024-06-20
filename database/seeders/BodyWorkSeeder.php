<?php

namespace Database\Seeders;

use App\Models\BodyWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyWork::insert([
            ['id' => 1, 'name' => 'Buggy'],
            ['id' => 2, 'name' => 'Caminhão leve'],
            ['id' => 3, 'name' => 'Conversivel'],
            ['id' => 4, 'name' => 'Hatch'],
            ['id' => 5, 'name' => 'Pick-up'],
            ['id' => 6, 'name' => 'Sedã'],
            ['id' => 7, 'name' => 'SUV'],
            ['id' => 8, 'name' => 'Van/Utilitário'],
        ]);
    }
}
