<?php

namespace App\Http\Requests\URL;

use Illuminate\Foundation\Http\FormRequest;

class CreateQrCodeRequest extends FormRequest
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
            'url_qr_code' => ['required', 'url'],
        ];
    }


    public function messages(): array
    {
        return [
            'url_qr_code.required' => 'O campo URL é obrigatório.',
            'url_qr_code.url' => 'O campo URL deve ser uma URL válida.',
        ];
    }
}
