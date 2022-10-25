<?php
namespace App\Actions\Product;

use App\helpers\HandleImage;
use App\Models\Product;
use Illuminate\Support\Arr;

class UpdateProductAction
{
    use HandleImage;
    public function handle(Product $product,array $data): Product
    {
       $product->update(Arr::except($data, 'image'));
        $this->UpdateImage($data,$product,'product');
        return $product;
    }
}
