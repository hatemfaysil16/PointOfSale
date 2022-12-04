<?php
namespace App\Actions\Purchases;

use App\Actions\Warehouse\EditWarehouseAction;
use App\Models\Purchase;

class UpdatePurchasesAction
{
    public function handle(Purchase $purchase,array $data,$quantity_old=null): Purchase
    {
        $purchase->update($data);
        // $new=$data['quantity'];
        // $old=$data['quantity_old'];
        app(EditWarehouseAction::class)->handle($purchase,$quantity_old);
        return $purchase;
    }
}
