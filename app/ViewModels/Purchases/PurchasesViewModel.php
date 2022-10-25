<?php
namespace App\ViewModels\Purchases;

use App\Models\Product;
use App\Models\Purchases;
use Spatie\ViewModels\ViewModel;

class PurchasesViewModel extends ViewModel
{
    public  $Purchases;
    public  $Product;


    public function __construct($Purchases = null)
    {
        $this->Product = Product::get();
        $this->Purchases = is_null($Purchases) ? new Purchases(old()) : $Purchases;
    }

    public function action(): string
    {
        return is_null($this->Purchases->id)
            ? route('purchases.store')
            : route('purchases.update', ['purchases' => $this->Purchases->id]);
    }

    public function method(): string
    {
        return is_null($this->Purchases->id) ? 'POST' : 'PUT';
    }
}
