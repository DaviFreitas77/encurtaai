<?php

namespace App\Http\Controllers\client;


use App\Models\Url;
use App\Helpers;
use App\Services\UrlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class urlController

{
    public function __construct(private UrlService $url_service) {}

    public function shortenedUrl(Request $request)
    {
        if (!Auth::check()) {
            $limite_generate_url = 5;

            $urlsCriadas = session()->get('urls', 0);

            if ($urlsCriadas >= $limite_generate_url) {
                return response()->json([
                    'error' => 'Você atingiu o limite de ' . $limite_generate_url . 'Por favor, crie uma conta.'
                ], 429);
            }
        }
        $validate = $request->validate([
            'url_original' => ['required', 'url'],
            'password_url' => ['nullable', 'min:4'],
            'slug' => ['nullable', 'min:4', 'max:20', 'unique:tb_url,slug']
        ], [
            'url_original.required' => 'O campo URL é obrigatório.',
            'slug.min' => 'O slug deve ter no mínimo 4 caracteres.',
            'slug.max' => 'O slug deve ter no máximo 20 caracteres.',
            'password_url.min' => 'A senha deve ter no mínimo 4 caracteres.',
            'slug.unique' => 'Este slug já está em uso.',
            'url_original.url' => 'O campo URL deve ser uma URL válida.'
        ]);

        $url = $this->url_service->create_shoterned_url($validate);

        if (!Auth::check()) {
            session()->increment('urls');
        }

        return response()->json([
            'url_shortened' => url('/r/' . $url->slug)
        ]);
    }

    public function redirect(Request $request, string $slug)
    {

        $url = $this->url_service->process_redirect($slug);

        if (!$url) {

            return redirect('/404');
        }

        if ($request->expectsJson()) {
            return response()->json([
                'url_original' => $url->url_original
            ]);
        }
        return redirect($url->url_original);
    }
}
