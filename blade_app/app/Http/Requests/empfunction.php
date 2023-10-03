<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class empfunction extends FormRequest
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
            'Full_name'=>'required',
            'Company_ID'=>'required',
            'Email'=>'required',
            'Phone' =>'required',
        ];
    }

    public function messages()
    {
        return[
        'Full_name.required' => 'please fill full name',
        'Company_ID.required' => 'please fill Conpany id',
        'Email.required' => 'please fill Email',
        'Phone.required' => 'please fill phone_no',
        ];
    }
}
