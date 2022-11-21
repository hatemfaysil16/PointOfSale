<?php

namespace App\Rules\Invoice;

use App\Models\Invoice;
use App\Models\Warehouse;
use Illuminate\Contracts\Validation\Rule;

class InvoiceRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $products;
    public function __construct($products)
    {
        $this->products=$products;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $available = Warehouse::where('products_id',$this->products)->latest()->pluck('available')->first();
        $InvoiceProduct = Invoice::where('products_id',$this->products)->sum('qty');
        if($value+$InvoiceProduct>=$available){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'quantity is not available.';
    }
}
