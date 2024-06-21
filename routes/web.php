<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModel\VersionController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImportBrandsAndCarModelsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/import', [ImportBrandsAndCarModelsController::class, 'import'])->name('import');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/carros')->group(function(){
        Route::get('/cadastrar',[CarController::class,'create'])->name('cars.create');
        Route::post('',[CarController::class,'store'])->name('cars.store');
    });

    Route::prefix('/modelos')->group(function(){
        Route::get('', [CarModelController::class, 'getCarModelsByBrand'])->name('cars.getCarModelsByBrand');

    });

    Route::prefix('/versoes')->group(function(){
        Route::get('', [VersionController::class, 'getVersionsByCarModel'])->name('cars.getVersionsByCarModel');
    });

    Route::prefix('/clientes')->group(function(){
        Route::get('/cadastrar',[CustomerController::class,'create'])->name('customers.create');
        Route::post('',[CustomerController::class,'store'])->name('customers.store');

    });

});

require __DIR__ . '/auth.php';
