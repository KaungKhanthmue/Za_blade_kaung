<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class comemp extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Name'=>'required',
            'Email'=>'required',
            'Logo'=>'required',
            'Website' =>'required',
        ];
    }
    public function messages()
    {
        return[
        'Name.required' => 'please fill name',
        'Email.required' => 'please fill Email',
        'Logo.required' => 'please fill Logo',
        'Website.required' => 'please fill Websitename',
        ];
    }
}
