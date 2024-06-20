<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => 1, 'description' => 'Default'],
            ['id' => 2, 'description' => 'Manager'],
            ['id' => 3, 'description' => 'Admin'],
        ];

        Role::insert($roles);
    }
}
