<?php

namespace App\Http\Controllers;

use App\Actions\fuel\GetFuelDataAction;
use Illuminate\Http\Request;

class FuelController extends Controller
{

    public function index(): ?array
    {
        return GetFuelDataAction::getAllFuels();
    }
}
