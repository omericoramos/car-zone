<?php

namespace App\Actions\engine;

use App\Models\Engine;

class GetEngineDataAction
{
    public static function getAllEngines(): ?array
    {
        return Engine::all()->toArray();
    }
}
