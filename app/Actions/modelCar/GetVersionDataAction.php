<?php

namespace App\Actions\modelCar;

use App\Models\Version;

class GetVersionDataAction
{
    public static function getVersionsByCarModel(string $name): ?array
    {
        return Version::where('name', 'like', "%{$name}%")
            ->get(['name', 'code', 'id'])
            ->toArray();
    }
}
