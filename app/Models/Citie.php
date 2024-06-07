<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Citie extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'state_id',
        'name'
    ];

    public function state() {
        return $this->belongsTo(State::class);
    }
}
