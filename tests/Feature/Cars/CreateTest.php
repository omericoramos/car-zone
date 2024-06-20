<?php

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('deve renderizar a pagina de create', function () {

    $userRight = User::factory()->create(
        [
            'role_id' => 3
        ]
    );
    actingAs($userRight)
        ->get(route('cars.create'))
        ->assertSuccessful();

    $userWrong = User::factory()->create([
        'role_id' => 1
    ]);

    actingAs($userWrong)
        ->get(route('cars.create'))
        ->assertForbidden();
});
