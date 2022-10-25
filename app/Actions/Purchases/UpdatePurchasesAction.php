<?php
namespace App\Actions\Purchases;

use App\Models\Purchases;

class UpdatePurchasesAction
{
    public function handle(Purchases $purchases,array $data): Purchases
    {
          $purchases->update($data);
          return $purchases;
    }
}
