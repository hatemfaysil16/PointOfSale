<?php
namespace App\Actions\Typesofweight;

use App\Models\Product;
use App\Models\Typesofweight;

class StoreTypesofweightAction
{
    public function handle(array $data): Typesofweight
    {
        $typesofweight = Typesofweight::create($data);
        return $typesofweight;
    }
}
