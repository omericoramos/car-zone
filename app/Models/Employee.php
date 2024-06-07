<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'address_id',
        'position_id',
        'first_name',
        'last_name',
        'email',
        'salary'
    ];

    public function address() {
        return $this->belongsTo(Address::class);
    }

    public function position() {
        return $this->belongsTo(Position::class);
    }
}
