<?php

namespace App\Actions\modelCar;

use App\Models\CarModel;

class GetCarModelDataAction
{
    public static function getCarModelByBrand(int $brandId): ?array
    {
        return CarModel::where('brand_id', $brandId)->get([
            'id',
            'name',
            'brand_id as brandId'
        ])->toArray();
    }
}
