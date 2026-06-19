<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        //autoriza ou não a fazer o request
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required|min:3|max:80',
            'price' => 'required|numeric|max:999999.99',
            'description' => 'nullable|max:255'
        ];
    }
}
