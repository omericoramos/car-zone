<?php

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('deve acessar a rota de create', function () {
    
    $user = User::factory()->create();
    actingAs($user);
    get(route('user.create'));
    
})->todo();

it('deve renderizar a pagina de create', function () {
    //expect()->
})->todo();

