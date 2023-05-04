<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'=>'required|string|min:2|max:255',
            'address'=>'required|string|min:5',
            'iframe'=>'required|string',
            'phone'=>'required|string|min:3',
            'email'=>'required|email|min:5',
            'date'=>'string|max:50',
        ];
    }
}
