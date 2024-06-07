<?php 

namespace App\Service\Fipe;

use Illuminate\Support\Facades\Http;

class ConsultBrandsService{

    public static function getBrands(){
        
        return Http::get('https://fipe.parallelum.com.br/api/v2/cars/brands')->json();
    }
}