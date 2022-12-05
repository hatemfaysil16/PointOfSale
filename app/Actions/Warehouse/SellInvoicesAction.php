<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class SellInvoicesAction
{
    public function handle($datas)
    {
        foreach($datas as $data){
            $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
            $warehouse= Warehouse::where('products_id',$data['products_id'])->first();
            $warehouse->sold = $warehouse->sold + $data['qty'];
            $warehouse->available = +$available - +$warehouse->sold;
            $warehouse->save();
        }
            return $warehouse;
    }
}