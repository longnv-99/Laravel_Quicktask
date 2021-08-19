<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => [
                'email',
                'required',
                Rule::unique('users')->ignore($this->user),
            ],
            'address' => 'required|string|max:255',
            'position' => 'string|nullable',
        ];
    }
}
