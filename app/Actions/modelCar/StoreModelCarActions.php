<?php

namespace App\Actions\modelCar;

use App\Actions\brand\GetBranDataActions;
use App\Models\CarModel;
use App\Models\Version;
use App\Service\Fipe\ConsultModelsCarService;

class StoreModelCarActions
{
    public static function storeCarModelData(): void
    {
        $brands = GetBranDataActions::getAllBrand();

        if ($brands) {
            foreach ($brands as $brand) {

                $allModelsCar = ConsultModelsCarService::getAllModelsCarOfBrand($brand['code']);

                if (isset($allModelsCar['modelos'])) {

                    self::storeData($allModelsCar['modelos'], $brand['id']);
                }
            }
        }
    }

    private static function storeData(array $allModelsCar, int $brandId)
    {
        $carName = [];
        $carNameStore = [];
        $carVersion = [];

        foreach ($allModelsCar as $key => $modelCar) {

            $name = current(explode(' ', $modelCar['nome']));

            if (!in_array($name, $carName)) {
                $carName[$key] = $name;
                $carNameStore[$key] = ['name' => $name, 'brand_id' => $brandId];
            }

            $carVersion[$key] = ['name' => $modelCar['nome'], 'code' => $modelCar['codigo']];
        }

        CarModel::insert($carNameStore);
        Version::insert($carVersion);
    }
}
