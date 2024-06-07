<?php

namespace App\Http\Controllers;

use App\Actions\brand\StoreBrandDataActions;
use App\Actions\modelCar\StoreModelCarActions;
use App\Jobs\StoreCarModelsJobs;
use App\Jobs\StoreVehicleBrandsJobs;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }
}
