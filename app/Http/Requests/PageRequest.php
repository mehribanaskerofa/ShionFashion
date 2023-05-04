<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function rules(): array
    {
//        dd($this->route('page'));
        $pageId=$this->route('page')?->id;
        return [
            'title'=>'required|string|min:2|max:255',
            'text'=>'required|min:2',
            'slug'=>'required|unique:pages,slug,'.$pageId.'|min:2|max:255',//for custom
            'image'=>[Rule::requiredIf($this->method()=='POST') ,'image','mimes:jpg,jpeg,png']
        ];
    }
}
