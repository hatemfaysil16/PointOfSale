<?php
namespace App\ViewModels\Product;

use Spatie\ViewModels\ViewModel;

class productViewModel extends ViewModel
{
    public Selector $selector;

    public function __construct($selector = null)
    {
        // $this->selector = is_null($selector) ? new Selector(old()) : $selector;
    }

    public function action(): string
    {
        return is_null($this->selector->id)
            ? route('typesofweight.store')
            : route('typesofweight.update', ['selector' => $this->selector->id]);
    }

    public function method(): string
    {
        return is_null($this->selector->id) ? 'POST' : 'PUT';
    }
}
