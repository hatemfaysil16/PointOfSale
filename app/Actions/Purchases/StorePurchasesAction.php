<?php
namespace App\Actions\Purchases;

use App\Actions\Warehouse\StoreWarehouseAction;
use App\Models\Purchase;
use App\Models\Warehouse;

class StorePurchasesAction
{
    public function handle(array $data): Purchase
    {
        $Purchases = Purchase::create($data);
        app(StoreWarehouseAction::class)->handle($Purchases);
        return $Purchases;
    }
}
