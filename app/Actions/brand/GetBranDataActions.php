<?php

namespace App\Actions\brand;

use App\Models\Brand;

class GetBranDataActions
{
    public static function getAllBrand()
    {
       return Brand::all();
    }
}
