<?php
namespace App\ViewModels\Purchases;

use App\Models\Product;
use App\Models\Purchase;
use Spatie\ViewModels\ViewModel;

class PurchasesViewModel extends ViewModel
{
    public  $purchase;
    public  $Product;


    public function __construct($purchase = null)
    {
        $this->Product = Product::get();
        $this->purchase = is_null($purchase) ? new Purchase(old()) : $purchase;
    }

    public function action(): string
    {
        return is_null($this->purchase->id)
            ? route('purchases.store')
            : route('purchases.update', $this->purchase->id);
    }

    public function method(): string
    {
        return is_null($this->purchase->id) ? 'POST' : 'PUT';
    }
}
