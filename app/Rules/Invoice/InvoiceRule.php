<?php

namespace App\Rules\Invoice;

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
        // dd($this->products);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
