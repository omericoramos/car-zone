<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'address_id',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];

    public function address() {
        return $this->belongsTo(Address::class);
    }
}
