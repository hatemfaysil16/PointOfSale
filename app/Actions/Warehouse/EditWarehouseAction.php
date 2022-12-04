<?php
namespace App\Actions\Warehouse;

use App\Models\Warehouse;

class EditWarehouseAction
{
    public function handle($data,$quantity_old=null)
    {
        $new=$data['quantity'];
        $old=$quantity_old;
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        if(+$new==+$old){
            $warehouse= Warehouse::where('products_id',$data['products_id'])->first();
            $warehouse->products_id = $data['products_id'];
            $warehouse->buy = $data['quantity'];
            $warehouse->available = $available;
            $warehouse->ExpiryDate = $data['ExpiryDate'];
            $warehouse->WarehouseNumber = $data['WarehouseNumber'];
            $warehouse->save();
            return $warehouse;
        }elseif(+$new>+$old){
        $newQuantity=  +$new - +$old;
        $warehouse= Warehouse::where('products_id',$data['products_id'])->first();
        $warehouse->products_id = $data['products_id'];
        $warehouse->buy = $data['quantity'];
        $warehouse->available = +$available - +$newQuantity;
        $warehouse->ExpiryDate = $data['ExpiryDate'];
        $warehouse->WarehouseNumber = $data['WarehouseNumber'];
        $warehouse->save();
        return $warehouse;
        }elseif($old<$new){
            dd('sd');
        $newQuantity= $old - $new;
        $available = Warehouse::where('products_id',$data['products_id'])->latest()->pluck('available')->first();
        $warehouse= Warehouse::where('products_id',$data['products_id'])->first();
        $warehouse->products_id = $data['products_id'];
        $warehouse->buy = $data['quantity'];
        $warehouse->available = $available+$newQuantity;
        $warehouse->ExpiryDate = $data['ExpiryDate'];
        $warehouse->WarehouseNumber = $data['WarehouseNumber'];
        $warehouse->save();
        return $warehouse;
        }
    }
}