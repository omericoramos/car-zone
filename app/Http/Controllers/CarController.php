<?php

namespace App\Http\Controllers;

use App\Actions\brand\GetBranDataActions;
use App\Actions\modelCar\GetCarModelDataAction;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Inertia\Inertia;

class CarController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return view('cars.index');
    }

    public function create()
    {
        $this->authorize('create', User::class);
        $brands = GetBranDataActions::getAllBrand();
        return Inertia::render('Cars/Create', compact('brands'));
    }

    public function store(Request $request)
    {
        // Handle the form submission for creating a new car
    }

   
}
