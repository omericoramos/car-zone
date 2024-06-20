<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'description'
    ];

    public function permiton()
    {
        return $this->hasMany(User::class,'role_id');
    }
}
