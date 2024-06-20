<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PositionController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return view('positions.index');
    }

    public function create()
    {
        $this->authorize('create', User::class);
        return Inertia::render('Positions/Create');
    }

    public function store(Request $request)
    {
        // Handle the form submission for creating a new car
    }
}
