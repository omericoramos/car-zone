<?php

namespace App\Actions\transmission;

use App\Models\Transmission;

class GetTramissionDataAction
{
    public static function getAllTransmissions(): ?array
    {
        return Transmission::all()->toArray();
    }
}
