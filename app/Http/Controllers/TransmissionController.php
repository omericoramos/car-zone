<?php

namespace App\Http\Controllers;

use App\Actions\transmission\GetTramissionDataAction;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function index(): ?array
    {
        return GetTramissionDataAction::getAllTransmissions();
    }
}
