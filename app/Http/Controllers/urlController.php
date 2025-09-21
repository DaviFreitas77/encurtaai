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
            'password_url' => ['nullable'],
            'slug' => ['nullable', 'min:4', 'max:20']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.'
        ]);

        // dd($validate);

        $url = new Url;
        $url->url_original = $validate['url_original'];
        $url->url_shortened  = 'aaa';
        $url->slug = $validate['slug'];
        $url->click_count = 0;
        $url->status = 'active';
        $url->save();

        return response()->json([
            'url_shortened' => $url->url_shortened
        ]);
    }
}
