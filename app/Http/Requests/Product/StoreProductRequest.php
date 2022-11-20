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
            'name'=>['required','max:255'],
            'ProductGroup'=>['required','max:255'],
            'ProductBarcode'=>['required','max:255'],


            'BoxLength'=>['required','max:255'],
            'BoxWidth'=>['required','max:255'],
            'BoxHight'=>['required','max:255'],
            'PacksPerBox'=>['required','max:255'],
            
            
            
            'PackType'=>['required','max:255'],
            'PackWeight'=>['required','max:255'],
            'typesofweights_id'=>['required','exists:typesofweights,id'],

            'BoxCostPrice'=>['required','max:255'],
            'BoxPrice_shop'=>['required','max:255'],
            'BoxPrice_company'=>['required','max:255'],
            
            'CountryOfOrigin'=>['required','max:255'],
            'Manufacturer'=>['required','max:255'],


        ];
    }
}
