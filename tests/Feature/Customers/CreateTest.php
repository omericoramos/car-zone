<?php

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('deve renderizar a página de create', function () {
    $userRigth = User::factory()->create(['role_id' => 2]);

    actingAs($userRigth);
    get(route('customers.create'))->assertSuccessful();

    $userWrong = User::factory()->create(['role_id' => 1]);

    actingAs($userWrong);
    get(route('customers.create'))->assertForbidden();
});
