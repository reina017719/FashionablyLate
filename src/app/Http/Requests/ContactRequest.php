<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'tinyInteger'],
            'email' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'numeric', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'building' =>['string', 'max:255'],
            'issue-type' => ['required', 'string'],
            'contact-issue' => ['required', 'string']
        ];
    }
}
