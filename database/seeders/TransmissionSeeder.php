<?php

namespace Database\Seeders;

use App\Models\Transmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transmission::insert([
            ['id' => 1, 'name' => 'Manual'],
            ['id' => 2, 'name' => 'Automático'],
            ['id' => 3, 'name' => 'Semi-Automático'],
            ['id' => 4, 'name' => 'Automátizada'],
        ]);
    }
}
