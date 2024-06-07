<?php


namespace App\Service\Fipe;

use Illuminate\Support\Facades\Http;

class ConsultModelsCarService
{
    public static function getAllModelsCarOfBrand(string $codeBrand)
    {
        return Http::get('https://parallelum.com.br/fipe/api/v1/carros/marcas/' . $codeBrand . '/modelos')->json();
    }
}
