<?php

namespace App\Actions\fuel;

use App\Models\Fuel;

class GetFuelDataAction
{
    public static function getAllFuels(): ?array
    {
        return Fuel::all()->toArray();
    }
}
