<?php
namespace App\Actions\Product;

use App\Models\Product;
class UpdateProductAction
{
    public function handle(array $data,int $id):Product
    {
        return  Product::find($id)->update($data);
    }
}
