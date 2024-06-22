<?php

namespace App\Http\Controllers;

use App\Actions\modelCar\GetCarModelDataAction;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function getCarModelsByBrand(Request $request)
    {
        $listCarModels = GetCarModelDataAction::getCarModelByBrand($request->brand);
        return $listCarModels;
    }
}
