<?php

namespace App\Http\Requests\Invoices;

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
            // Invoice::create
            'invoicetype'=>['required','min:2','max:225'],
            'date'=>['required'],
            'clients_id'=>['required','exists:clients,id'],
            'products_id'=>['required','exists:products,id'],
            'qty'=>['required'],
            // --------------------------------------
            // client::create
            'name'=>['nullable','unique:clients,name','min:2','max:225'],
            'street'=>['nullable','min:2','max:225'],
            'CompanyState'=>['nullable','min:2','max:225'],
            'phone'=>['nullable','unique:clients,phone','min:2','max:15'],
            'companyName'=>['nullable','unique:clients,companyName','min:2','max:225'],
            'companyCity'=>['nullable','unique:clients,companyCity','min:2','max:225'],
            'PostalCode'=>['nullable','min:2','max:225'],
            // --------------------------------------

        ];
    }
}
