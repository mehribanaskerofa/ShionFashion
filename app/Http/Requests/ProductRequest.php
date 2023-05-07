<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'=>'required|string|min:3',
            'text'=>'required|string|min:3',
            'price'=>'required|string',
            'image'=>[Rule::requiredIf($this->method()=='POST'),'image','mimes:png,jpg,jpeg'],
            'category_id'=>'required|exists:category,id'
        ];
    }
}
