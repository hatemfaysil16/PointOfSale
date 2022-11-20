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
            'name'=>['required','max:255'],
            'CompanyState'=>['required','max:255'],
            'street'=>['required','max:1000'],
            'companyCity'=>['required','max:14'],
            'PostalCode'=>['required','max:14'],
            'phone'=>['required','max:14'],
            'companyName'=>['required','max:14'],
        ];
    }
}
