<?php

namespace App\Http\Controllers;

use App\Actions\bodyWork\GetBodyWoksDataAction;
use Illuminate\Http\Request;

class BodyWorkController extends Controller
{
    public function index(): ?array
    {
       return GetBodyWoksDataAction::getAllBodyWorks();
    }
}
