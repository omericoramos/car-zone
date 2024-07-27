<?php

namespace App\Actions\brand;

use App\Models\Brand;

class GetBranDataActions
{
    public static function execute(): array
    {
       return Brand::all([
        'id as id',
        'name as name',
        'code as code'
       ])->toArray();
    }
}
