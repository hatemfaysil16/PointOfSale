<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name'=>['required','min:3','max:255'],
            'CompanyState'=>['required','min:3','max:255'],
            'street'=>['required','min:3','max:1000'],
            'companyCity'=>['required','min:3','max:14'],
            'PostalCode'=>['required','min:3','max:14'],
            'phone'=>['required','min:3','max:14'],
            'companyName'=>['required','min:3','max:14'],
        ];
    }
}
