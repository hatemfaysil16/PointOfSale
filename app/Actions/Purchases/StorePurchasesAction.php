<?php
namespace App\Actions\Purchases;

use App\Models\Purchases;


class StorePurchasesAction
{
    public function handle(array $data): Purchases
    {
        $Purchases = Purchases::create($data);
        return $Purchases;
    }
}
