<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class urlController extends Controller
{
    public function shortenedUrl(Request $request)
    {
        $validate = $request->validate([
            'url_original' => ['required'],
            'password_url' => ['nullable', 'min:4'],
            'slug' => ['nullable', 'min:4', 'max:20', 'unique:tb_url,slug']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'slug.unique' => 'Este slug já está em uso.'
        ]);


        $url = new Url;
        $url->url_original = $validate['url_original'];
        $url->slug = $validate['slug'];
        $url->click_count = 0;
        $url->status = 'active';
        $url->save();

        return response()->json([
            'url_shortened' => env('APP_URL') . '/' . $url->slug
        ]);
    }
}
