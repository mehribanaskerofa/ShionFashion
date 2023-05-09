<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image'=>[Rule::requiredIf($this->method()=='POST') ,'image','mimes:jpg,jpeg,png'],
            'product_id'=>'required|exists:product,id'
        ];
    }
}
