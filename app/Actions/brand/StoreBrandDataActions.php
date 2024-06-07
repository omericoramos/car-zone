<?php 

namespace App\Actions\brand;

use App\Models\Brand;
use App\Service\Fipe\ConsultBrandsService;

class StoreBrandDataActions
{
    public static function storeData()
    {
        $brands = ConsultBrandsService::getBrands();
        Brand::insert($brands);
    }
}