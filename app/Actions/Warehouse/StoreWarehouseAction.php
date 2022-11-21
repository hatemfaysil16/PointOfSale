<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class StoreWarehouseAction
{
    public function handle($data)
    {
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        $warehouse = new Warehouse();
        $warehouse->products_id = $data['products_id'];
        $warehouse->buy = $data['quantity'];
        $warehouse->sold = !empty($data['sold'])?$data['sold']:0;
        $warehouse->available = $warehouse->buy+$available;
        $warehouse->ExpiryDate = $data['ExpiryDate'];
        $warehouse->InvoiceNumber = $data['InvoiceNumber'];
        $warehouse->save();
        return $warehouse;
    }
}

            // $table->date('date')->nullable();
            // $table->date('ExpiryDate')->nullable();