<?php
namespace App\ViewModels\Typesofweight;
use App\Models\Typesofweight;
use Spatie\ViewModels\ViewModel;

class TypesofweightViewModel extends ViewModel
{
    public  $typesofweight;

    public function __construct($typesofweight = null)
    {
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
