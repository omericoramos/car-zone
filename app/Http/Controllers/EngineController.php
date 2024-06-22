<?php

namespace App\Http\Controllers;

use App\Actions\engine\GetEngineDataAction;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    public function index(): ?array
    {
        return GetEngineDataAction::getAllEngines();
    }
}
