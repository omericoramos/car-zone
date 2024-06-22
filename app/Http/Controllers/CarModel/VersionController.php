<?php

namespace App\Http\Controllers\CarModel;

use App\Actions\modelCar\GetVersionDataAction;
use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function getVersionsByCarModel(Request $request)
    {
       $versions = GetVersionDataAction::getVersionsByCarModel($request->carModel);
       return $versions;
    }
}
