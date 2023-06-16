<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|pdf',
        ];
    }

    public function messages()
    {
        return [
                'name.required' => 'nome é obrigatorio',
                'name.min' => 'minimo de caracteres é 3',
                'photo.required' => 'arquivo pdf é obrigatorio'
        ];
    }

}
