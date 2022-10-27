<?php
namespace App\Actions\Purchases;

use App\Models\Purchase;


class StorePurchasesAction
{
    public function handle(array $data): Purchase
    {
        $Purchases = Purchase::create($data);
        return $Purchases;
    }
}
