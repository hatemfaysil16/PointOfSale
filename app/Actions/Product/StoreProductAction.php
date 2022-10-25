<?php
namespace App\Actions\Product;

use App\helpers\HandleImage;
use App\Models\Product;
use Illuminate\Support\Arr;

class StoreProductAction
{
    use HandleImage;
    public function handle(array $data): Product
    {
        $product = Product::create(Arr::except($data, 'image'));
        $this->storeImage($data,$product,'product');
        return $product;
    }
}
