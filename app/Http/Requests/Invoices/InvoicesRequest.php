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
            'name'=>['required','unique:clients,name','min:2','max:225'],
            'street'=>['required','min:2','max:225'],
            'CompanyState'=>['required','min:2','max:225'],
            'phone'=>['required','unique:clients,phone','min:2','max:15'],
            'companyName'=>['required','unique:clients,companyName','min:2','max:225'],
            'companyCity'=>['required','unique:clients,companyCity','min:2','max:225'],
            'PostalCode'=>['required','min:2','max:225'],
            // --------------------------------------
            // client::create
            // 'name_edit'=>['nullable','min:2','max:225'],
            // 'street_edit'=>['nullable','min:2','max:225'],
            // 'CompanyState_edit'=>['nullable','min:2','max:225'],
            // 'phone_edit'=>['nullable','min:2','max:15'],
            // 'companyName_edit'=>['nullable','min:2','max:225'],
            // 'companyCity_edit'=>['nullable','min:2','max:225'],
            // 'PostalCode_edit'=>['nullable','min:2','max:225'],
        ];
    }
}
