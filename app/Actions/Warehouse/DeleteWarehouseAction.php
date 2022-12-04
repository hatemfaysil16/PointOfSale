<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class DeleteWarehouseAction
{
    public function handle($data)
    {
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        $warehouse= Warehouse::where('products_id',$data['products_id'])->latest()->first();
        $warehouse->available = +$available - +$data['quantity'];
        $warehouse->save();
        return $warehouse;
    }
}