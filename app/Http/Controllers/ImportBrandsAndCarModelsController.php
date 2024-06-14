<?php

namespace App\Http\Controllers;

use App\Jobs\StoreCarModelsJobs;
use App\Jobs\StoreVehicleBrandsJobs;
use App\Models\Brand;
use Illuminate\Http\Request;

class ImportBrandsAndCarModelsController extends Controller
{
    // sail art queue:work --timeout=240
    public function import()
    {
        $brands = Brand::all();

        if($brands == null){
            dispatch(new StoreVehicleBrandsJobs);
            dispatch(new StoreCarModelsJobs)->delay(now()->addSeconds(20));
        }
        
        return redirect(route('dashboard'));
    }
}
