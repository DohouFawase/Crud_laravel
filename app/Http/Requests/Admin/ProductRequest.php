<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>['required', 'min:8'],
            'description'=>['required', 'min:8'],
            'price'=>['required','integer', 'min:0'],
            'image'=>['required', 'mines: jpeg, png, svg'],
            'stock'=>['required', 'boolean']

        ];
    }
}
