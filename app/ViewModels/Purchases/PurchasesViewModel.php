<?php
namespace App\ViewModels\Typesofweight;
use Spatie\ViewModels\ViewModel;

class PurchasesViewModel extends ViewModel
{
    public  $typesofweight;
    public  $type;

    public function __construct($typesofweight = null)
    {
        $this->type = is_null($typesofweight)?'Add':'Edit' ; 
        $this->typesofweight = is_null($typesofweight) ? new Typesofweight(old()) : $typesofweight;
    }

    public function action(): string
    {
        return is_null($this->typesofweight->id)
            ? route('typesofweight.store')
            : route('typesofweight.update', ['typesofweight' => $this->typesofweight->id]);
    }

    public function method(): string
    {
        return is_null($this->typesofweight->id) ? 'POST' : 'PUT';
    }
}
