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
        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id},id",
            'description' => 'required|min:3|max:10000',
            'price' => 'required',
            'image' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
                'name.required' => 'nome é obrigatorio',
                'name.min' => 'minimo de caracteres é 3',
                'photo.required' => 'arquivo é obrigatorio'
        ];
    }

}
