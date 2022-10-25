<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'image'=>['nullable','mimes:jpg,jpeg,png'],
            'name'=>['required','min:3','max:255'],
            'ProductGroup'=>['required','min:3','max:255'],
            'ProductBarcode'=>['required','min:3','max:255'],


            'BoxLength'=>['required','min:3','max:255'],
            'BoxWidth'=>['required','min:3','max:255'],
            'BoxHight'=>['required','min:3','max:255'],
            'PacksPerBox'=>['required','min:3','max:255'],
            
            
            
            'PackType'=>['required','min:3','max:255'],
            'PackWeight'=>['required','min:3','max:255'],
            'typesofweights_id'=>['required','exists:typesofweights,id'],

            'BoxCostPrice'=>['required','min:3','max:255'],
            'BoxPrice_shop'=>['required','min:3','max:255'],
            'BoxPrice_company'=>['required','min:3','max:255'],
            
            'CountryOfOrigin'=>['required','min:3','max:255'],
            'Manufacturer'=>['required','min:3','max:255'],


        ];
    }
}
