<?php

namespace App\Http\Requests\Invoices;

use App\Rules\Invoice\InvoiceRule;
use Illuminate\Foundation\Http\FormRequest;

class InvoicesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'products_id'=>['required','exists:products,id'],
            'qty'=>[new InvoiceRule($this->products_id),'required'],
        ];
    }
}
