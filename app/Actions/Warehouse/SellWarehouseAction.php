<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class SellWarehouseAction
{
    public function handle($dates)
    {
        foreach($dates as $data){
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        $warehouse = new Warehouse();
        $warehouse->products_id = $data['products_id'];
        $warehouse->sold = !empty($data['qty'])?$data['qty']:0;
        $warehouse->available = abs($warehouse->sold-$available);
        $warehouse->InvoiceNumber = $data['invoicenumber'];
        $warehouse->save();
        }
        return $warehouse;
    }
}
