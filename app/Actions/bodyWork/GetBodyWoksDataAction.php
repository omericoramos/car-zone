<?php


namespace App\Actions\bodyWork;

use App\Models\BodyWork;

class GetBodyWoksDataAction
{
    public static function getAllBodyWorks(): ?array
    {
        return BodyWork::all()->toArray();
    }
}
