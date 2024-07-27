<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployerController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return Inertia::render('Employees/List');
    }

    public function create()
    {
        $this->authorize('create', User::class);
        return Inertia::render('Employees/Create');
    }

    public function store(Request $request)
    {
        // Handle the form submission for creating a new car
    }
}
