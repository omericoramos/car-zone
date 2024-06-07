<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'customer_id',
        'car_id',
        'sale_date',
        'sale_price',
        'payment_method',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }
}
