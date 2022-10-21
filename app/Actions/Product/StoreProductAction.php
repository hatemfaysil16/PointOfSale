<?php
namespace App\Actions\Product;

use App\Models\Product;
class StoreProductAction
{
    public function handle(array $data): Product
    {
        $product = Product::create($data);
        return $product;
    }
}
