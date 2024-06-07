<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeedBack extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'customer_id',
        'description'
    ];

    public function feedback() {
        return $this->belongsTo(FeedBack::class);
    }
}
