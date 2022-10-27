<?php
namespace App\Actions\Purchases;

use App\Models\Purchase;

class UpdatePurchasesAction
{
    public function handle(Purchase $purchase,array $data): Purchase
    {
          $purchase->update($data);
          return $purchase;
    }
}
