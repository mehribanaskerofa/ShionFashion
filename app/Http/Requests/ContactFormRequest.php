<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'name'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string'
        ];
    }
}
