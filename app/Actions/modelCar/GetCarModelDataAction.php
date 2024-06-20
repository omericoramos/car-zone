<?php

namespace App\Actions\modelCar;

use App\Models\CarModel;

class GetCarModelDataAction
{
    public static function getCarModelByBrand(int $brandId): ?array
    {
        $listCarModels = CarModel::where('brand_id', $brandId)->get()->toArray();
        return $listCarModels;
    }
}
