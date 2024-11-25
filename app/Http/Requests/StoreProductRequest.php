<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user() == null)
            return false;
        if (! Auth::user()->is_admin)
            return false;

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
            'cat' => 'required',
            'cost' => 'required|max:20',
            'img' => 'required|mimes:jpeg,jpg,png,gif|max:500',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome do produto é obrigatório.',
            'name.max' => 'O nome do produto deve ter no máximo 255 caracteres.',
            'desc.required' => 'A descrição do produto é obrigatória.',
            'desc.max' => 'A descrição do produto deve ter no máximo 255 caracteres.',
            'cat.required' => 'A categoria é obrigatório.',
            'cost.required' => 'O preço do produto é obrigatório.',
            'cost.max' => 'O preço do produto deve ter no máximo 20 caracteres.',
            'img.required' => 'A imagem é obrigatória.',
            'img.mimes' => 'A imagem deve ser um arquivo do tipo: jpeg, jpg, png ou gif.',
            'img.max' => 'A imagem não pode exceder 500KB.',
        ];
    }
}
