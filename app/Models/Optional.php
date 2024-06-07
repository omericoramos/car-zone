<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Optional extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'name'
    ];
    
    public function cars() {
        return $this->belongsToMany(Car::class);
    }
}
