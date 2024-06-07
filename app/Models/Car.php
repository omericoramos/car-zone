<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'bodywork_id',
        'engine_id',
        'transmission_id',
        'car_model_id',
        'brand_id',
        'fuel_id',
        'status_id',
        'title',
        'license_plate',
        'chassis',
        'year',
        'price',
        'color',
        'description',
    ];

    public function bodywork() {
        return $this->hasMany(BodyWork::class);
    }

    public function engine() {
        return $this->hasMany(Engine::class);
    }

    public function transmission() {
        return $this->hasMany(Transmission::class);
    }

    public function carModel() {
        return $this->belongsTo(CarModel::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function fuel() {
        return $this->hasMany(Fuel::class);
    }

    public function statusCar() {
        return $this->hasMany(StatusCar::class);
    }

    public function optionals() {
        return $this->belongsToMany(Optional::class);
    }
}
