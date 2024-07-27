<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumerDocument extends Model
{
    use HasFactory;
    protected $fillable = [
            'path_Proof_address',
            'path_identification',
            'path_Proof_income_1',
            'path_Proof_income_2',
            'path_Proof_income_3',
            'customer_id'
    ];
}
