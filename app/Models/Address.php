<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'citie_id',
        'row',
        'number',
        'cep',
        'neighborhood'
    ];

    public function city() {
        return $this->belongsTo(Citie::class);
    }
}
