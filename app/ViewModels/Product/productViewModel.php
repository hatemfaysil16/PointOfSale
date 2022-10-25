<?php
namespace App\ViewModels\Product;
use App\Models\Product;
use App\Models\Typesofweight;
use Spatie\ViewModels\ViewModel;

class productViewModel extends ViewModel
{
    public  $Product;
    public  $type;
    public  $Typesofweight;

    public function __construct($Product = null)
    {
        $this->type = is_null($Product)?'Add':'Edit' ; 
        $this->Typesofweight = Typesofweight::get();
        $this->Product = is_null($Product) ? new Product(old()) : $Product;
    }

    public function action(): string
    {
        return is_null($this->Product->id)
            ? route('products.store')
            : route('products.update',$this->Product->id);
    }

    public function method(): string
    {
        return is_null($this->Product->id) ? 'POST' : 'PUT';
    }
}
