<?php
namespace App\Actions\Product;

use App\Models\Product;
class StoreProductAction
{
    public function handle(array $data, string $type): Product
    {
        $product = Product::create($data);
        $product->assignRole($type);
        return $product;
    }
}
