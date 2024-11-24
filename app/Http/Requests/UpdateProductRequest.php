<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if(Auth::user() == null)
            return false;
        if(! Auth::user()->is_admin)
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
            'img' => 'mines:jpeg,jpg,png,gif|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres',
            'desc.required' => 'O campo descrição é obrigatório',
            'desc.max' => 'O campo descrição deve ter no máximo 255 caracteres',
            'cat.required' => 'O campo categoria é obrigatório',
            'cost.required' => 'O campo custo é obrigatório',
            'cost.max' => 'O campo custo deve ter no máximo 20 caracteres',
            'img.mines' => 'O arquivo deve ser uma imagem',
            'img.max' => 'O arquivo deve ter no máximo 500KB',

        ];

    }
}
