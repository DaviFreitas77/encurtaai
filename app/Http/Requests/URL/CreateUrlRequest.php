<?php

namespace App\Http\Requests\URL;

use Illuminate\Foundation\Http\FormRequest;

class CreateUrlRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'url_original' => ['required', 'url'],
            'password_url' => ['nullable', 'min:4'],
            'slug' => ['nullable', 'min:4', 'max:20', 'unique:tb_url,slug'],
        ];
    }


    public function messages(): array
    {
        return [
            'url_original.required' => 'O campo URL é obrigatório.',
            'url_original.url' => 'O campo URL deve ser uma URL válida.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
        ];
    }
}
