<?php

namespace App\Http\Requests\Purchases;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchasesRequest extends FormRequest
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
            'date'=>['required'],
            'products_id'=>['required','exists:purchases,id'],
            'quantity'=>['required','min:3','max:225'],
            'PurchasePrice'=>['required','min:3','max:225'],
            'ProductionDate'=>['required','min:3','max:225'],
            'ExpiryDate'=>['required','min:3','max:225'],
            'WarehouseNumber'=>['required','min:3','max:225'],
            'InvoiceNumber'=>['required','min:3','max:225'],
            'total'=>['required','min:3','max:225'],
        ];
    }
}
