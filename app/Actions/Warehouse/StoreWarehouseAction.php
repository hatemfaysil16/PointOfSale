<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class StoreWarehouseAction
{
    public function handle($data)
    {
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        if(empty($available)){
            $warehouse = new Warehouse();
            $warehouse->products_id = $data['products_id'];
            $warehouse->buy = $data['quantity'];
            $warehouse->available = $warehouse->buy;
            $warehouse->ExpiryDate = $data['ExpiryDate'];
            $warehouse->WarehouseNumber = $data['WarehouseNumber'];
            $warehouse->save();
            return $warehouse;
        }else{
            $warehouse= Warehouse::where('products_id',$data['products_id'])->first();
            $warehouse->products_id = $data['products_id'];
            $warehouse->buy = $data['quantity'];
            $warehouse->available = $warehouse->buy+$available;
            $warehouse->ExpiryDate = $data['ExpiryDate'];
            $warehouse->WarehouseNumber = $data['WarehouseNumber'];
            $warehouse->save();
            return $warehouse;
        }
    }
}