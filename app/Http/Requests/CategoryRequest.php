<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'=>'required|string|min:3',
            'image'=>[Rule::requiredIf($this->method()=='POST'),'image','mimes:png,jpg,jpeg'],
            'slug'=>'required|unique:category,slug,'.$this->route('category')?->id.'|min:2'
        ];
    }
}
