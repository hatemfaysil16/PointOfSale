<?php

namespace App\Http\Requests\Invoices;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesAccountRequest extends FormRequest
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
            'totalpacks'=>['required'],
            'subtotal'=>['required'],
            'customerbalance'=>['required'],
            'additionalDiscount'=>['required'],
            'tax'=>['required'],
            'total'=>['required'],
            'paid'=>['required'],
            'Left'=>['required'],

            'invoicetype'=>['required','min:2','max:225'],
            'date'=>['required'],
            'clients_id'=>['required','exists:clients,id'],
            // --------------------------------------
            // client::create
            // 'name'=>['nullable','min:2','max:225'],
            // 'street'=>['nullable','min:2','max:225'],
            // 'CompanyState'=>['nullable','min:2','max:225'],
            // 'phone'=>['nullable','min:2','max:15'],
            // 'companyName'=>['nullable','min:2','max:225'],
            // 'companyCity'=>['nullable','min:2','max:225'],
            // 'PostalCode'=>['nullable','min:2','max:225'],
            // --------------------------------------
        ];
    }
}
