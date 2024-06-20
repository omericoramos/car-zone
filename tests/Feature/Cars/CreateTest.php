<?php

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
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

it('deve listar todas as marcas de carros', function () {

    $user = User::factory()->create(
        [
            'role_id' => 3
        ]
    );

    actingAs($user);
    $brands = Brand::factory()->create();
    $response = get(route('cars.create', compact('brands')))->assertSuccessful();

    /**@var Brand $brand */
    foreach ($brands as $brand) {
        $response->assertSee($brand);
    }
});

it('deve listar todos os modelos de carros da marca selecionada', function () {

    $user = User::factory()->create();

    actingAs($user);

    $brand = Brand::factory()->create();
    get(route('cars.getCarModelsByBrand', $brand))->assertSuccessful();
});

it('deve listar todas as versões do modelo selecionado', function () {
    //expect()->
})->todo();

it('deve listar todos as carrocerias cadastrados', function () {
    //expect()->
})->todo();

it('deve listar todos os motores cadastrados', function () {
    //expect()->
})->todo();

it('deve listar todas as transmissões cadastrados', function () {
    //expect()->
})->todo();

it('deve listar todos os tipos de combustível cadastrados', function () {
    //expect()->
})->todo();
