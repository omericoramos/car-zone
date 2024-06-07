<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comission extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'sale_id',
        'employee_id',
        'amount_comission',
        'payment_date',
    ];

    public function sale() {
        return $this->belongsTo(Sale::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
